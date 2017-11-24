<?php

namespace console\controllers;

use common\models\Daemons;
use common\models\MotivatorBotProcess;

class WatcherDaemonController extends \vyants\daemon\controllers\WatcherDaemonController
{
    protected $sleep = 5;
    private static $stopFlag = false;
    protected $memoryLimit = 268435456;
    public $maxChildProcesses = 10;
    public $demonize = true;


    /**
     * @return array
     */
    protected function defineJobs()
    {
        sleep($this->sleep);
        return $this->getDaemonsList();
    }


    public function getDaemonsList()
    {
//        $daemons = [
//            ['daemon' => 'motivator-bot-daemon', 'enabled' => true],
//        ];

        return Daemons::find()->all();

    }
}

//     php yii watcher-daemon