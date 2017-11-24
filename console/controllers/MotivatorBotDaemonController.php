<?php

namespace console\controllers;

use common\models\Daemons;
use common\models\MotivatorBotProcess;

use  yii\helpers\Json;
use yii\console\Controller;

class MotivatorBotDaemonController extends \vyants\daemon\DaemonController
{
    protected $sleep = 1;
    private static $stopFlag = 0;
    protected $memoryLimit = 268435456;
    public $maxChildProcesses = 0;
    public $isMultiInstance = 0;
//    protected static $currentJobs = [];
    public static $works;

    public $demonize = 0;

    /**
     * @return jobtype
     */
    protected function doJob($job)
    {

        if (self::$works[$job['daemon']] == 1) {
            self::$works[$job['daemon']] = 0;
            \Yii::$app->telegram->sendMessage([
                'chat_id' => $job['chat_id'],
                'text' => $job['text'],
//                'text' => $job['text'].Json::encode(self::$works),
            ]);
        }

        return true;
    }
    /**
     * @return array
     */
    protected function defineJobs()
    {
        $jobs = [];
        $lines = MotivatorBotProcess::find()->orderBy(['start_time'=>SORT_ASC])->all();
        $now = date_timestamp_get(new \DateTime());
//        self::$works=[];


        foreach ($lines as $line) {
            $daemonName = $line['id'].$line['motivator_id'].$line['chat_id'];
            if ($line['start_time']< $now && !isset(self::$works[$daemonName])) {  //  &&  !$jobs[*]['daemon' => $process['id']
                self::$works[$daemonName] = 1;

                $jobs[$line['id'].$line['chat_id']] = [
                    'daemon' => $daemonName,
                    'enabled' => true,
                    'text'=>$line['text'],
                    'chat_id' => $line['chat_id'],

                ];
                $line->delete();

            }

        }

        if (empty($jobs) && empty($lines)) {
            $daemon = Daemons::find()->where(['daemon'=>'motivator-bot-daemon'])->one();
            if ($daemon == null) {
                $daemon = new Daemons();
                $daemon['daemon'] = 'motivator-bot-daemon';
            }
            $daemon['enabled'] = 0;
            $daemon->save();
            self::$works=[];
//            $this->stopFlag = 1;
        }

        return $jobs;


    }

}