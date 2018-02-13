<?php

namespace frontend\controllers;


use yii\filters\ContentNegotiator;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use Yii;
use yii\web\Response;


class B2bBotController extends \yii\web\Controller
{

    public function behaviors() {
        return [
            'contentNegotiator' => [
                'class'   => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
//            'rateLimiter'       => [
//                'class' => RateLimiter::className(),
//            ],
//            'authenticator' => [
//                'class' => \app\components\auth\QueryParamAuth::className(),
////                'except' => [ 'create' ],
//            ],
        ];
    }

    public function beforeAction($action)
    {
        if (in_array($action->id, ['do'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    public function actionDo()
    {

        return '200';



//        return $this->orders([
//            'phone' => Yii::$app->params['b2bTestPhone'],
//            'orderId' => 'МУЗ006396',
//        ]);
    }



    public function order(array $options = [])
    {
        $jsonResponse = $this->curlCall(Yii::$app->params['b2bServerPathProdOrder'], $options);
        return json_decode($jsonResponse);
    }


    public function orders(array $options = [])
    {
        $jsonResponse = $this->curlCall(Yii::$app->params['b2bServerPathProdLastOrders'], $options);
        return json_decode($jsonResponse);
    }

    private function curlCall($url, $options=array())
    {
        $options['apiKey']= Yii::$app->params['b2bServerApiKey'];
        $optQuery = http_build_query($options);
        $ch = curl_init($url.'?'.$optQuery);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, "Bot");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (count($options)) {
            curl_setopt($ch, CURLOPT_POST, true); // Content-Type: application/x-www-form-urlencoded" header.
        }
        $r = curl_exec($ch);
        if($r == false){
            $text = 'error '.curl_error($ch);
//            Yii::info($text, 'attBot');
            return $text;
        } else {
//            return curl_getinfo($ch);
//            $info = curl_getinfo($ch);
//            Yii::info($info, 'attBot');
//            print_r($info) ;

        }
        curl_close($ch);
        return $r;
    }






}
//
