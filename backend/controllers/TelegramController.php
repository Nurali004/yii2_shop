<?php

namespace backend\controllers;

use api\models\Category;
use api\models\Product;
use api\models\ProductImage;
use backend\models\Page;
use backend\models\Text;

use common\models\User;
use common\models\UserBot;
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

//        $rs = $this->telegram->setWebhook(['url' => 'https://93e6400e7288.ngrok-free.app/telegram/bot']);
//        var_dump($rs);
//        die();



        $this->actionGetDatas();

        switch ($this->text) {
            case '/start':

                $this->actionShowHomePage();
                return;

            case Text::CATEGORIYALAR:
                $this->actionShowCategoryPage();
                return;

            case Text::CONTACT:
                $this->actionShowContactPage();
                return;

            case Text::ISM:
                $this->actionShowNamePage();
                return;

            case Text::FAMILIYA:
                $this->actionShowSurnamePage();
                return;

            case Text::TELEFON_RAQAM:
                $this->actionShowPhonePage();
                return;


            case Text::MAHSULOTLAR:
                $this->actionShowProductListPage();
                return;

            case Text::ORTGA:
                $this->actionShowHomePage();
                return;

            case Text::ASUS_OQ:
                $this->actionColorKompyuterPage($this->text);
                return;



            case Text::KOMPYUTERLAR:
                $this->actionKompyuterPage();
                return;


            case Text::ASUS:
                $this->actionShowAsusPage($this->text);
                return;

        }

        switch ($this->actionGetPage()) {

            case Page::ASUS:
                if ($this->text == Text::CATEGORY_ORTGA) {
                    $this->actionKompyuterPage();
                    die();
                }
                $this->actionAsusOrderPage($this->text);
                return;

            case Page::KOMPYUTER_PAGE:
                if ($this->text == Text::CATEGORY_ORTGA) {
                    $this->actionShowCategoryPage();
                }
                break;

            case Page::ISM_PAGE:
                if ($this->text == Text::ORTGA){
                    $this->actionShowHomePage();
                    die();
                }
                $this->actionNamePage($this->text);
                return;

            case Page::SURNAME_PAGE:
                if ($this->text == Text::ORTGA){
                    $this->actionShowHomePage();
                    die();
                }
                $this->actionSurnamePage($this->text);

                return;

            case Page::PHONE_PAGE:
                if ($this->text == Text::ORTGA){
                    $this->actionShowHomePage();
                    die();
                }
                $this->actionPhonePage($this->text);
                return;

            case Page::CONTACT_PAGE:
                if ($this->text == Text::ORTGA){
                    $this->actionShowHomePage();
                    die();
                }

            case Page::COLOR_PAGE:
                $this->actionShowProductCountPage($this->text);
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


    // CONTACT PAGE BEGIN //

    public function actionShowContactPage()
    {
        $this->actionSetPage(Page::CONTACT_PAGE);
        $text = "Kontakt Sahifasiga Xush Kelibsiz!" ."\n\n";

        $name = $this->actionGetName();
        $surname = $this->actionGetSurname();
        $phone = $this->actionGetPhone();

        $text .= "Name: " . $name . "\n"."Surname: " . $surname . "\n"."Phone: " . $phone;




        $reply_markup = Keyboard::make()
            ->setResizeKeyboard(true)
            ->row([
                Keyboard::button(Text::ISM),
                Keyboard::button(Text::FAMILIYA),
            ])
            ->row([
                Keyboard::button(Text::TELEFON_RAQAM),
                Keyboard::button(Text::ORTGA),
            ]);

        $this->actionSendMessageWithKeyboard($text, $reply_markup);

    }

    public function actionShowNamePage()
    {
        $this->actionSetPage(Page::ISM_PAGE);
        $text = "Iltimos Ismingizni Kiriting!";
        $this->actionSendMessage($text);


    }

    public function actionNamePage($text)
    {

        $this->actionSetName($text);
        $this->actionSendMessage("✅Saqlandi.");


    }

    public function actionShowSurnamePage()
    {
        $this->actionSetPage(Page::SURNAME_PAGE);
        $text = "Iltimos Familyangizni Kiriting!";
        $this->actionSendMessage($text);


    }

    public function actionSurnamePage($text)
    {

        $this->actionSetSurname($text);
        $this->actionSendMessage("✅Saqlandi.");


    }

    public function actionShowPhonePage()
    {
        $this->actionSetPage(Page::PHONE_PAGE);
        $text = "Iltimos Telefon Raqamingizni Kiriting!";
        $this->actionSendMessage($text);


    }

    public function actionPhonePage($text)
    {

        $this->actionSetPhone($text);

        $this->actionSendMessage("✅Saqlandi.");

        $text = null;

        $name = $this->actionGetName();
        $surname = $this->actionGetSurname();
        $phone = $this->actionGetPhone();
        $text .= "Name: " . $name . "\n"."Surname: " . $surname . "\n"."Phone: " . $phone;
        $this->actionSendMessage($text);


    }


    // CONTACT PAGE END

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
            Keyboard::button(Text::CATEGORY_ORTGA),
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
        $text = '<b>' . "Mahsulotlardan birini tanlang!" . '</b>';
        $reply_markup->row([
            Keyboard::button(Text::CATEGORY_ORTGA)
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
        $product = Product::find()->where(['name_uz' => $text])->one();
        $productItems = ProductImage::find()->where(['product_id' => $product->id])->all();

        $media = [];
        $postFields = [
            'chat_id' => $this->chat_id,
        ];

        foreach ($productItems as $i => $item) {

            $path = Yii::getAlias('@frontend') . '/web/' . $item->image;

            $key = "file$i";

            $media[] = [
                'type'  => 'photo',
                'media' => "attach://$key",
            ];


            $postFields[$key] = new \CURLFile($path);
        }


        $postFields['media'] = json_encode($media, JSON_UNESCAPED_UNICODE);

        $url = "https://api.telegram.org/bot".$this->telegram->getAccessToken()."/sendMediaGroup";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

        $res = curl_exec($ch);
        curl_close($ch);


        $text = "Quyidagi Mahsulot Ranglaridan birini tanlang!";
        $reply_markup = Keyboard::make()
            ->setResizeKeyboard(true)
            ->row([
                Keyboard::button(Text::ASUS_OQ),
                Keyboard::button(Text::ASUS_QORA)
            ])
            ->row([
                Keyboard::button(Text::CATEGORY_ORTGA),
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
            $text .= $product['id'] . '. ' . '<b>' . $product['name_uz'] . '</b>' . "\n";

        }

        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'parse_mode' => 'HTML',
        ]);

    }

    public function actionSetPage($page)
    {
       $this->actionSetKey('page', $page);


    }

    public function actionGetPage()
    {
       return $this->actionGetKey('page');


    }

    public function actionSetPhone($phone)
    {
        $this->actionSetKey('phone', $phone);


    }

    public function actionGetPhone()
    {
        return $this->actionGetKey('phone');


    }

    public function actionSetName($name)
    {
        $this->actionSetKey('name', $name);


    }

    public function actionGetName()
    {
        return $this->actionGetKey('name');


    }

    public function actionSetSurname($surname)
    {
        $this->actionSetKey('surname', $surname);


    }

    public function actionGetSurname()
    {
        return $this->actionGetKey('surname');


    }

    public function actionShowProductCountPage($text)
    {
        $this->actionSetPage(Page::COUNT_PAGE);
        $this->actionSetKey('count', $text);

        $text = "Yuborish Manzilini Kiriting...";
        $this->actionSendMessage($text);

    }

    public function actionProductCountPage()
    {
        return $this->actionGetKey('count');

    }

    public function actionColorKompyuterPage($text)
    {
        $this->actionSetPage(Page::COLOR_PAGE);

        $this->actionSetKey('color_kompyuter', $text);

        $text = "Mahsulot Sonini Kiriting!";
        $reply_markup = Keyboard::remove();

        $this->actionSendMessageWithKeyboard($text, $reply_markup);


    }

    public function actionSetKey($key, $value)
    {

        $user = UserBot::find()->where(['chat_id' => $this->chat_id])->one();
        if (!$user) {
            $user = new UserBot();
            $user->chat_id = $this->chat_id;
            $user->step = json_encode([]);
        }

        $arr = json_decode($user->step ?? '', true);
        if (!is_array($arr)) {
            $arr = [];
        }
        $arr[$key] = $value;
        $user->step = json_encode($arr);
        $user->save(false);



    }

    public function actionGetKey($key)
    {
        $user = UserBot::find()->where(['chat_id' => $this->chat_id])->one();
        if (!$user) {
            return null;
        }


        $arr = json_decode($user->step, true);

        return $arr[$key] ?? null;


    }

    public function actionGetDatas()
    {


        $update = $this->telegram->getWebhookUpdate();
        $message = $update->getMessage();

        if (!$message) {
            return;
        }

        $chat = $message->getChat();
        $chat_id = $chat->getId();
        $username = $chat->getUsername();
        $first_name = $chat->getFirstName();
        $last_name = $chat->getLastName();

        $this->chat_id = $chat_id;


        $this->text = $message->getText() ?? '';
        $contact = $message->getContact();

        $phone = $contact ? $contact->getPhoneNumber() : null;


        $user = UserBot::findOne(['chat_id' => $chat_id]);
        if (!$user) {
            $user = new UserBot();
            $user->chat_id = $chat_id;
            $user->username = $username;
            $user->first_name = $first_name;
            $user->last_name = $last_name;
            $user->phone = $phone;

            $user->save(false);
        }

    }

    public function actionSendMessage($text)
    {
        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'parse_mode' => 'HTML',
        ]);

    }

    public function actionSendMessageWithKeyboard($text, $reply_markup)
    {
        $this->telegram->sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $text,
            'reply_markup' => $reply_markup,
            'parse_mode' => 'HTML',

        ]);

    }

}