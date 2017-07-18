<?php

namespace backend\controllers;

use common\models\Happypage;
use common\models\LiveOutEx;
use common\models\Motivator;
use Yii;
use common\models\Popular;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PopularController implements the CRUD actions for Popular model.
 */
class PopularController extends Controller
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
     * Lists all Popular models.
     * @return mixed
     */
    public function actionIndex()
    {
        Url::remember();
        $dataProvider = new ActiveDataProvider([
            'query' => Popular::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCollect()
    {
        $statistics = \common\modules\statistics\CountNs::getStat();
        $pages = [];
        foreach ($statistics as $visit) {
            $type = null;
            $link = null;
            $image = null;
            $name = null;
            if (strpos($visit['str_url'], 'happiness/')) {
                $type = 'happiness';
                $link = substr ( $visit['str_url'] , strpos($visit['str_url'], 'happiness/') );
                $id = null;
                if ($link=='happiness/origin') {$id = 2;}
                if ($link=='happiness/meaning') {$id = 3;}
                if ($link=='happiness/biochemistry') {$id = 4;}
                if ($link=='happiness/body') {$id = 6;}
                if ($link=='happiness/soul') {$id = 7;}
                if ($link=='happiness/life') {$id = 8;}
                if ($link=='happiness/quotes') {$id = 9;}
                if ($link=='happiness/medicine') {$id = 10;}
                if ($link=='happiness/philosophy') {$id = 11;}
                if ($link=='happiness/economy') {$id = 12;}
                if ($link=='happiness/symbols') {$id = 13;}
                if ($link=='happiness/holiday') {$id = 14;}
                if ($link=='happiness/museum') {$id = 15;}

                $object = Happypage::find()->where(['id'=>$id])->one();
                $image = $object['imagelink'];
                $name = $object['title'];
            }
            if (strpos($visit['str_url'], 'liveout/')) {
                $type = 'liveout';
                $id = substr ( $visit['str_url'] , strpos($visit['str_url'], 'liveout/warn/') +13 );
                $object = LiveOutEx::find()->where(['id'=>$id])->one();
                $image = 'NS-logo_sun.png';
                $name = $object['ex_name'];
                $link = 'liveout/warn/'.$id;
            }
            if (strpos($visit['str_url'], 'motivator/')) {
                $type = 'motivator';
                $hrurl = substr ( $visit['str_url'] , strpos($visit['str_url'], 'motivator/') +10 );
                $link = 'motivator/'.$hrurl;
                $object = Motivator::find()->where(['hrurl'=>$hrurl])->one();
                $image = $object['background'];
                $name = $object['pagehead'];
            }
            $pages[$visit['str_url']]['type'] = $type ;
            $pages[$visit['str_url']]['link'] = $link ;
            $pages[$visit['str_url']]['image'] = $image ;
            $pages[$visit['str_url']]['name'] = $name ;

            if(isset($pages[$visit['str_url']]['count'])){
                $pages[$visit['str_url']]['count']++;
            } else {
                $pages[$visit['str_url']]['count'] = 1 ;
            }
        }

        $now = new \DateTime();
        $today = $now->format('d-m-Y');
        foreach ($pages as $page) {
            if(Popular::find()->where(['type'=>$page['type']])->andWhere(['name'=>$page['name']])->one()){
                $popItem = Popular::find()->where(['type'=>$page['type']])->andWhere(['name'=>$page['name']])->one();
                $popItem['image'] = $page['image'];
            } else {
                $popItem = new Popular();
                $popItem['type'] = $page['type'];
                $popItem['name'] = $page['name'];
                if ($page['image']) {
                    $popItem['image'] = $page['image'];
                } else {
                    $popItem['image'] = 'NS-logo_sun.png';
                }
                $popItem['link'] = $page['link'];
            }
            if (!$popItem['image']) {
                $popItem['image'] = 'NS-logo_sun.png';
            }
            $popItem['count'] = $page['count'];
            $popItem['date'] = $today;
            $popItem->save();
        }

        return $this->redirect(Url::previous());


    }
    /**
     * Displays a single Popular model.
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
     * Creates a new Popular model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Popular();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Popular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Popular model.
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
     * Finds the Popular model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Popular the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Popular::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
