<?php

namespace api\controllers;

use Telegram\Bot\Api;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class TelegramController extends Controller{

    public $enableCsrfValidation = false;

    public $telegram;

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->telegram = new Api('8324193089:AAF0tsuNAOaFRLfqCcWLm54XqUnKHOQ57gQ');

    }

    public function actionBot()
    {
        $rs = $this->telegram->setWebhook([
            'url' => 'https://c4d46c5d7d76.ngrok-free.app/telegram/bot'

        ]);







    }
    public function actionWebhook()
    {
        $update = $this->telegram->getWebhookUpdate();

        $message = $update->getMessage();

        if ($message) {
            $chatId = $message->getChat()->getId();
            $text = $message->getText();

            if ($text === '/start') {
                $reply = 'Assalomu Alaikum, xush kelibsiz!';
            } else {
                $reply = "Siz yozdingiz: $text";
            }

            $this->telegram->sendMessage([
                'chat_id' => $chatId,
                'text' => $reply,
            ]);
        }

        return 'ok';
    }



}