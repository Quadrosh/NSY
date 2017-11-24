<?php

namespace console\controllers;

use vyants\daemon\DaemonController;
use yii\console\Controller;

class ChekController extends Controller
{
    public function actionIndex()
    {

        if (function_exists("pcntl_signal") == false){
            echo "false";
        } else {
            echo "exist";
        }
    }


    public function actionGoWest($route = null)
    {
        if (is_null($route)) {
            $route = \Yii::$app->requestedRoute;
        }

        echo str_replace(['/index', '/'], ['', '.'], $route);
        return 0;
    }
    /**
     * Init function
     */
//    public function init()
//    {
//
////        parent::init();
//
//        //set PCNTL signal handlers
//        pcntl_signal(SIGTERM, ['vyants\daemon\DaemonController', 'signalHandler']);
//        pcntl_signal(SIGINT, ['vyants\daemon\DaemonController', 'signalHandler']);
//        pcntl_signal(SIGHUP, ['vyants\daemon\DaemonController', 'signalHandler']);
//        pcntl_signal(SIGUSR1, ['vyants\daemon\DaemonController', 'signalHandler']);
//        pcntl_signal(SIGCHLD, ['vyants\daemon\DaemonController', 'signalHandler']);
//
//
//    }
}

// запуск из консоли php yii chek/pcntl         php yii chek/get-process-name