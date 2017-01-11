<?php

namespace backend\controllers;

use common\models\UploadForm;
use Yii;
use common\models\Articlesection;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ArticlesectionController implements the CRUD actions for Articlesection model.
 */
class ArticlesectionController extends Controller
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
     * Lists all Articlesection models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Articlesection::find(),
            'pagination'=> [
                'pageSize' => 100,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Articlesection model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        Url::remember();
        return $this->render('view', [
            'model' => $this->findModel($id),
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
            $model = Articlesection::find()->where(['id'=>$data['toModelId']])->one();
            if ($uploadmodel->upload()) {
                $model->$toModelProperty = $uploadmodel->imageFile->baseName . '.' . $uploadmodel->imageFile->extension;
                $model->save();
                Yii::$app->session->setFlash('success', 'Файл загружен успешно');
                return $this->redirect(Url::previous());
            }
        }
    }
    /**
     * Creates a new Articlesection model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Articlesection();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::previous());
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Articlesection model.
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
     * Deletes an existing Articlesection model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(Url::previous());
    }

    /**
     * Finds the Articlesection model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Articlesection the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articlesection::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
