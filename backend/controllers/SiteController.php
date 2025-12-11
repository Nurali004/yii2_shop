<?php

namespace backend\controllers;

use common\models\Cart;
use common\models\Category;
use common\models\ClientSaying;
use common\models\Customer;
use common\models\Favorite;
use common\models\LoginForm;
use common\models\Order;
use common\models\OrderItem;
use common\models\Partner;
use common\models\Product;
use common\models\Statistic;
use common\models\User;
use mdm\admin\models\form\ChangePassword;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 'dashmix';


    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'change', 'profile', 'update-profile'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $stats = [
            'categories' => Category::find()->count(),
            'products' => Product::find()->count(),
            'carts' => Cart::find()->count(),
            'orders' => Order::find()->count(),
            'customers' => User::find()->count(),
            'partners' => Partner::find()->count(),
            'clientSayings' => ClientSaying::find()->count(),
            'favorites' => Favorite::find()->count(),
        ];

        $statistic = Statistic::find()->one();

        $orderItems = [];


        $orders = Order::find()->where(['user_id' => Yii::$app->user->id])->all();
        foreach ($orders as $order) {

        $orderItems = OrderItem::find()->where(['order_id' => $order->id])->all();
        }

        $order_st = Order::find()->where(['status' => [1,2]])->count('*');
        $order_cm = Order::find()->where(['status' => 1])->count('*');




        return $this->render('index', [
            'stats' => $stats,
            'orders' => $orders,
            'orderItems' => $orderItems,
            'order_st' => $order_st,
            'order_cm' => $order_cm,
            'statistic' => $statistic,
        ]);
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionChange($lang)
    {
        Yii::$app->language = $lang;
        Yii::$app->session->set('lang', $lang);

        return $this->goHome();


    }

    public function actionProfile()
    {

        $model = new ChangePassword();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->change()) {
            return $this->goHome();
        }

        $user = Customer::find()->where(['user_id' => Yii::$app->user->identity->id])->one();

        if ($user->load(Yii::$app->getRequest()->post()) && $user->save()) {
            Yii::$app->session->setFlash('success', Yii::t('rbac-admin', 'Your information has been changed'));


        }

        return $this->render('profile', [
            'model' => $model,
            'user' => $user,
        ]);

    }

    public function actionUpdateProfile()
    {

        $user = Customer::find()->where(['user_id' => Yii::$app->user->identity->id])->one();

        if ($user->load(Yii::$app->getRequest()->post()) && $user->save()) {
            Yii::$app->session->setFlash('success', Yii::t('rbac-admin', 'Your information has been changed'));


        }

        return $this->renderAjax('update-profile', [
            'user' => $user,
        ]);
    }

    public function actionStatistic()
    {


        return $this->render('statistic', [
            'stats' => $stats,
        ]);

    }
}
