<?php

namespace backend\controllers;

use common\models\BotUser;
use common\models\ChBotPlay;
use common\models\ChBotSession;
use Yii;
use common\models\BotUse;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BotUseController implements the CRUD actions for BotUse model.
 */
class BotUseController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all BotUse models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => BotUse::find(),
            'pagination'=> [
                'pageSize' => 100,
            ],
            'sort' =>[
                'defaultOrder'=> [
                    'id' => SORT_DESC
                ]
            ]
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionStat()
    {
        $days = Yii::$app->request->get('days');
        if (!$days) {
            $days=7;
        }

        $now = time();
        $statLowDate = $now-($days*86400);
        $uses = BotUse::find()->where('created_at > :value', ['value' => $statLowDate])->all();
        $res = [];
        foreach ($uses as $use) {
            if (!isset($res[$use['item_id'].'_'.$use['item_type']])) {
                $hrurl = '';
                if ($use['item_type'] == 'play') {
                    $play = \common\models\ChBotPlay::find()->where(['id'=>$use['item_id']])->one();
                    $hrurl = $play['name'];
                }
                elseif ($use['item_type'] == 'phrase') {
                    $play = \common\models\ChBotPhrase::find()->where(['id'=>$use['item_id']])->one();
                    $hrurl = $play['name'];
                }
                else {
                    $hrurl =  '';
                }
                $res[$use['item_id'].'_'.$use['item_type']]['hrurl'] = $hrurl;
                $res[$use['item_id'].'_'.$use['item_type']]['plays'] = 1;

                if ($use['done'] == 'done') {
                    $res[$use['item_id'].'_'.$use['item_type']]['done'] = 1;
                }
                elseif ($use['done'] == 'interrupt'){
                    $res[$use['item_id'].'_'.$use['item_type']]['interrupt'] = 1;
                }
                elseif ($use['done'] == 'start'){
                    $res[$use['item_id'].'_'.$use['item_type']]['start'] = 1;
                }

            } else {
                $res[$use['item_id'].'_'.$use['item_type']]['plays'] += 1;
                    if ($use['done'] == 'done') {
                        if (isset( $res[$use['item_id'].'_'.$use['item_type']]['done'])) {
                            $res[$use['item_id'].'_'.$use['item_type']]['done'] += 1;
                        } else {
                            $res[$use['item_id'].'_'.$use['item_type']]['done'] = 1;
                        }
                    }

                    elseif ($use['done'] == 'interrupt'){
                        if (isset( $res[$use['item_id'].'_'.$use['item_type']]['interrupt'])) {
                            $res[$use['item_id'].'_'.$use['item_type']]['interrupt'] += 1;
                        } else {
                            $res[$use['item_id'].'_'.$use['item_type']]['interrupt'] = 1;
                        }
                    }
                    elseif ($use['done'] == 'start'){
                        if (isset( $res[$use['item_id'].'_'.$use['item_type']]['start'])) {
                            $res[$use['item_id'].'_'.$use['item_type']]['start'] += 1;
                        } else {
                            $res[$use['item_id'].'_'.$use['item_type']]['start'] = 1;
                        }
                    }


            }
        }

        ArrayHelper::multisort($res,['plays'],[SORT_DESC]);
//        debug(time()); die;


//        var_dump($now->getTimestamp()); die;
//        $usersQuery = ChBotPlay::find()->where('name != :value', ['value' => 'work']);
//        $plays = ChBotPlay::find()->where('name != :value', ['value' => 'work'])->orderBy('name')->all();


        $dataProvider = new ArrayDataProvider([
            'allModels' => $res,

            'pagination'=> [
                'pageSize' => 100,
            ],
            'sort' => [
                'attributes' => ['plays', 'done', 'interrupt','start'],
            ],
        ]);

        return $this->render('stat', [
            'dataProvider' => $dataProvider,
            'days' => $days,
        ]);
    }

    /**
     * Displays a single BotUse model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BotUse model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BotUse();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BotUse model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BotUse model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BotUse model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BotUse the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BotUse::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
