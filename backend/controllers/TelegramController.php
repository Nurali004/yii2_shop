<?php

namespace backend\controllers;

use Telegram\Bot\Api;
use yii\web\Controller;

class TelegramController extends  Controller
{

    public $enableCsrfValidation = false;

    public  $telegram;

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->telegram = new Api('8324193089:AAF0tsuNAOaFRLfqCcWLm54XqUnKHOQ57gQ');
    }

    public function behaviors()
    {
        return parent::behaviors();
    }

    public function actionBot()
    {
        $rs = $this->telegram->setWebhook(['url' => \Yii::$app->homeUrl.'/telegram/bot']);
        var_dump($rs);
        die();


        $response = $this->telegram->getWebhookUpdate();
        $message = $response->getMessage();
        $chat_id = $message->getChat()->getId();
        $text = $message->getText();


        $response = $this->telegram->sendMessage([
            'chat_id' => $chat_id,
            'text' => $text,
        ]);

    }

}