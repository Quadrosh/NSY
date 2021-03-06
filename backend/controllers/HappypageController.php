<?php

namespace backend\controllers;

use common\models\Happysection;
use common\models\UploadForm;
use Yii;
use common\models\Happypage;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * HappypageController implements the CRUD actions for Happypage model.
 */
class HappypageController extends BackController
{
    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'delete' => ['POST'],
//                ],
//            ],
//        ];
//    }

    /**
     * Lists all Happypage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Happypage::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Happypage model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        Url::remember();
        $uploadmodel = new UploadForm();
        $sections = Happysection::find()->where(['page_id'=>$id])->orderBy(['id'=>SORT_ASC])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'uploadmodel' => $uploadmodel,
            'sections' => $sections,
        ]);
    }

    /**
     * Upload images for  model with autofill corresponding model property
     */
    public function actionUpload()
    {
        $uploadmodel = new UploadForm();
        if (Yii::$app->request->isPost) {
            $uploadmodel->imageFile = UploadedFile::getInstance($uploadmodel, 'imageFile');
            $data=Yii::$app->request->post('UploadForm');
            $toModelProperty = $data['toModelProperty'];
            $model = Happypage::find()->where(['id'=>$data['toModelId']])->one();
            if ($uploadmodel->upload()) {
                $model->$toModelProperty = $uploadmodel->imageFile->baseName . '.' . $uploadmodel->imageFile->extension;
                $model->save();
                Yii::$app->session->setFlash('success', 'Файл загружен успешно');
            }
            return $this->redirect(Url::previous());
        }
    }
    /**
     * Creates a new Happypage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Happypage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Happypage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::previous());
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Happypage model.
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
     * Finds the Happypage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Happypage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Happypage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
