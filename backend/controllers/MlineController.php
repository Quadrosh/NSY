<?php

namespace backend\controllers;

use Yii;
use common\models\MLine;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MLineController implements the CRUD actions for MLine model.
 */
class MlineController extends Controller
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
     * Lists all MLine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MLine::find(),
            'pagination'=> [
                'pageSize' => 100,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MLine model.
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
     * Creates a new MLine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['motivator/view', 'id' => $model->motivator_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Copy from existing line
     *
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */

    public function actionCopy($id)
    {
        $source = $this->findModel($id);
       $model = new MLine();

        $model->block_num = $source->block_num;
        $model->quote_num = $source->quote_num;
        $model->text = $source->text;
        $model->mbox_style = $source->mbox_style;
        $model->line_style = $source->line_style;
        $model->motivator_id = $source->motivator_id;

        return $this->render('copy', [
                'model' => $model,
            ]);
    }


    /**
     * Creates a new MLine model from Motivator view
     * If creation is successful, the browser will be redirected to the 'Motivator' page.
     * @return mixed
     */
    public function actionCreatefor()
    {
        $model = new MLine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['motivator/view', 'id' => $model->motivator_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MLine model.
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
     * Updates an existing MLine model from Motivator.
     * If update is successful, the browser will be redirected to the Motivator page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdatefor($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['motivator/view', 'id' => $model->motivator_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MLine model.
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
     * Finds the MLine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MLine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MLine::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
