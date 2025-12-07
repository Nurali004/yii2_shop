<?php

namespace backend\controllers;

use backend\models\Page;
use backend\models\Text;

use common\models\Category;
use common\models\Product;
use common\models\ProductImage;
use Telegram\Bot\Api;

use Telegram\Bot\Keyboard\Keyboard;
use Yii;
use yii\helpers\Url;

use yii\web\Controller;

class TelegramController extends Controller
{

    public $enableCsrfValidation = false;

    public $telegram;
    public $chat_id;
    public $text;

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

//        $rs = $this->telegram->setWebhook(['url' => 'https://e84e0f346b1a.ngrok-free.app/telegram/bot']);
//        var_dump($rs);
//        die();

        $url = Url::home('https').'/telegram/bot';

        $rs = $this->telegram->setWebhook(['url' => $url]);




        $response = $this->telegram->getWebhookUpdate();
        $message = $response->getMessage();
        $chat_id = $message->getChat()->getId();
        $this->chat_id = $chat_id;
        $text = $message->getText();
        $this->text = $text;

        switch ($text) {
            case '/start':
                $this->actionShowHomePage();
                return;

            case Text::CATEGORIYALAR:
                $this->actionShowCategoryPage();
                return;

            case Text::MAHSULOTLAR:
                $this->actionShowProductListPage();
                return;

            case Text::ORTGA:
                $this->actionShowHomePage();
                return;

            case Text::KOMPYUTER_ORTGA:
                $this->actionShowCategoryPage();
                return;

            case Text::KOMPYUTERLAR:
                $this->actionKompyuterPage();
                return;

            case Text::ASUS_ORTGA:
                $this->actionKompyuterPage();
                return;

            case Text::ASUS:
                $this->actionShowAsusPage($text);
                return;

            case Text::ASUS_RANG_ORTGA:
                $this->actionKompyuterPage();
                return;
        }

        switch ($this->actionGetPage()) {

            case Page::ASUS:
                $this->actionAsusOrderPage($text);
                return;
        }


    }

    public function actionShowHomePage()
    {
        $this->actionSetPage(Page::HOME_PAGE);
        $text = "Assalomu Alaikum Botga Xush Kelibsiz!";
        $reply_markup = Keyboard::make()
            ->setResizeKeyboard(true)
            ->row([
                Keyboard::button(Text::CATEGORIYALAR),
                Keyboard::button(Text::BIZ_HAQIMIZDA),
            ])
            ->row([
                Keyboard::button(Text::MAHSULOTLAR),
                Keyboard::button(Text::CONTACT),
            ]);

        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'reply_markup' => $reply_markup,

        ]);

    }

    public function actionShowCategoryPage()
    {
        $this->actionSetPage(Page::CATEGORY_PAGE);
        $text = Text::CATEGORIYALAR_TEXT;
        $reply_markup = Keyboard::make()
            ->setResizeKeyboard(true)
            ->row([
                Keyboard::button(Text::KOMPYUTERLAR),

            ])->row([
                Keyboard::button(Text::SMARTFONLAR),

            ])->row([
                Keyboard::button(Text::MAISHIY_TEXNIKALAR),

            ])
            ->row([
                Keyboard::button(Text::ORTGA),

            ]);
        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'reply_markup' => $reply_markup,
        ]);


    }

    public function actionKompyuterPage()
    {
        $this->actionSetPage(Page::KOMPYUTER_PAGE);
        $categories = Category::find()->where(['pid' => 5])->all();
        $text = "Kompyuter kategoriyalari:\n\n";

       $reply_markup = Keyboard::make()
           ->setResizeKeyboard(true);
       foreach ($categories as $category) {
           $reply_markup->row([
               Keyboard::button($category->name_uz),
           ]);
       }
       $reply_markup->row([
           Keyboard::button(Text::KOMPYUTER_ORTGA),
       ]);



        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'reply_markup' => $reply_markup,
            'parse_mode' => 'HTML',
        ]);


    }

    public function actionShowAsusPage($text)
    {
        $this->actionSetPage(Page::ASUS);



            $category = Category::find()->where(['name_uz' => $text])->one();
            $products = Product::find()->where(['category_id' => $category->id])->all();
            $reply_markup = Keyboard::make()
                ->setResizeKeyboard(true);
            foreach ($products as $product) {
                $reply_markup->row([
                    Keyboard::button($product->name_uz),

                ]);
            }
            $text = '<b>'. "Mahsulotlardan birini tanlang!".'</b>';
            $reply_markup->row([
                Keyboard::button(Text::ASUS_RANG_ORTGA)
            ]);
            $this->telegram->sendMessage([
                'chat_id' => $this->chat_id,
                'text' => $text,
                'reply_markup' => $reply_markup,
                'parse_mode' => 'HTML',

            ]);




    }

    public function actionAsusOrderPage($text)
    {
        file_put_contents($this->chat_id, $text);
        $product = Product::find()->where(['name_uz' => $text])->one();
        file_put_contents($this->chat_id.'res', $product->id);
        $productItems = ProductImage::find()->where(['product_id' => $product->id])->all();


        foreach ($productItems as $productItem) {

            $photoUrls = '/'.$productItem->image;

            file_put_contents($this->chat_id.'image', $photoUrls);
            $this->telegram->sendPhoto([
                'chat_id' => $this->chat_id,
                'photo' => $photoUrls,
                'parse_mode' => 'HTML',
            ]);
            }


        $text = "Quyidagi Mahsulot Ranglaridan birini tanlang!";
        $reply_markup = Keyboard::make()
            ->setResizeKeyboard(true)
            ->row([
                Keyboard::button(Text::ASUS_OQ),
                Keyboard::button(Text::ASUS_QORA)
            ])
            ->row([
                Keyboard::button(Text::ASUS_RANG_ORTGA),

            ]);
        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'reply_markup' => $reply_markup,
            'parse_mode' => 'HTML',
        ]);






    }

    public function actionShowProductListPage()
    {
        $apiUrl = 'http://localhost:8888/api/products';

        $curl = curl_init($apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        curl_close($curl);
        $products = json_decode($json, true);

        $text = null;

        foreach ($products as $product) {
            $text .= $product['id'].'. '.'<b>'.$product['name_uz'].'</b>'."\n";

        }

        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'parse_mode' => 'HTML',
        ]);
        
    }

    public function actionSetPage($page)
    {
        file_put_contents($this->chat_id . 'page' . '.txt', $page);


    }

    public function actionGetPage()
    {
        return file_get_contents($this->chat_id . 'page' . '.txt');

    }

}