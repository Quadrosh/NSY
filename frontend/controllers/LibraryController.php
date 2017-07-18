<?php

namespace frontend\controllers;

use common\models\Articles;
use common\models\Pages;
use yii\helpers;
use Yii;

class LibraryController extends FrontController
{
    public $layout = 'happiness';
    public function actionIndex()
    {
        $this->view->params['bodyclass'] = 'library';
        $pageID = 4;
        $metapage = Pages::findOne($pageID);
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta'] = $metapage;

        $articles = Articles::find()->asArray()->orderBy('list_num')->all();
        $this->view->params['articles'] = $articles;

        return $this->render('index');
    }
    public function actionArticle()
    {
        $this->layout = 'library';
        $this->view->params['sunitem'] = 1;
        $this->view->params['bodyclass'] = 'article';

        $pagename = Yii::$app->request->get('hrurl');
        $article = Articles::find()->where(['hrurl'=>$pagename])->one();
        $sections = $article->sections;
        helpers\ArrayHelper::multisort($sections,['num'],[SORT_ASC]);
        $this->view->params['meta']['title'] = $article->title;
        $this->view->params['meta']['description'] = $article->description;
        $this->view->params['meta']['keywords'] = $article->keywords;
        $this->view->params['meta']['imagelink'] = $article->imagelink;
        $this->view->params['meta']['imagelink_alt'] = $article->imagelink_alt;


        $this->view->params['article'] = $article;
        $this->view->params['sections'] = $sections;

        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });

        return $this->render('article', ['article'=> $article, 'sections'=>$sections]);

    }



}
