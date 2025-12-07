<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\models\Slider;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;


$cartItemCount = $this->params['cartItemCount'] ?? 0;

\frontend\assets\ShopAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <div id="spinner"
         class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <?php $settings = \common\models\Setting::find()->one(); ?>
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-phone me-2 text-secondary"></i> <a href="#"
                                                                                            class="text-white"><?= $settings->phone_number ?></a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                                                                                              class="text-white"><?= $settings->email ?></a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small
                                class="text-white mx-2"><?= $settings->site_name ?></small>/</a>
                    <a href="#" class="text-white"><small class="text-white mx-2"><?= $settings->telegram_url ?></small>/</a>
                    <a href="#" class="text-white"><small
                                class="text-white mx-2"><?= $settings->instagram_url ?></small>/</a>
                    <a href="#" class="text-white"><small class="text-white mx-2"><?= $settings->youtube_url ?></small>/</a>

                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="/" class="navbar-brand"><h1 class="text-primary display-6"><img
                                src="/<?= $settings->logo_img ?>" width="100" height="90px"></h1></a>
                <button class="navbar-toggler py-2 px-3 collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white collapse show" id="navbarCollapse">
                    <?php
                    NavBar::begin([
                            'brandLabel' => $settings->site_name,
                            'brandUrl' => Yii::$app->homeUrl,

                            'options' => [

                                    'tag' => 'div',
                                    'class' => "navbar-nav mx-auto" ,
                                    'id' => ''
//
                            ],

                            'collapseOptions' => false,
                            'togglerContent' => '',
                            'renderInnerContainer' => false,


                    ]);
                    $menuItems = [
                            ['label' => 'Home', 'url' => ['/site/index']],
                            ['label' => 'About', 'url' => ['/site/about']],
                            ['label' => 'Contact', 'url' => ['/site/contact']],
                            [
                                    'label' => 'Cart <span id="cart-quantity" class="badge bg-danger">$cartItemCount</span>',
                                    'url' => ['/cart/index'],
                                    'encode' => false,
                            ]
                    ];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                    }

                    echo Nav::widget([

                            'items' => [
                                    [
                                            'label' => 'Home',
                                            'url' => ['/site/index'],
//                                            'options' => ['class' => 'nav-item'],       // har bir item uchun
                                            'linkOptions' => ['class' => 'nav-link'],  // link styling
                                    ],
                                    [
                                            'label' => 'About',
                                            'url' => ['/site/about'],
                                           // 'options' => ['class' => 'nav-item'],
                                            'linkOptions' => ['class' => 'nav-link'],
                                    ],

                            'options' => ['class' => 'navbar-nav mx-auto',
                                    'renderInnerContainer' => false,
                                    'items' => [
                                            [
                                                    'visible' => false,
                                            ]

                                    ],
                                    'renderItem' => false,
                                'encodeLabels' => false,
                                'tag' => false,

                            ],
                        // 'emptyClass' => false,


//                            'items' => [
//                                    ['label' => Yii::t('menu', 'Home'), 'url' => ['/site/index']],
//                                    ['label' => Yii::t('menu', 'About'), 'url' => ['/site/about']],
//                                    ['label' => Yii::t('site', 'Contact'), 'url' => ['/site/contact']],
//                                    ['label' => Yii::t('menu', 'Shop'), 'url' => ['/shop/index']],
//                            ],
                        //'renderItem' => false,


                    ]]);

                    if (Yii::$app->user->isGuest) {
                        echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['btn btn-link login text-decoration-none']]), ['class' => ['d-flex']]);
                    } else {
                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                . Html::submitButton(
                                        Yii::t('site', 'Sign Out') . ' (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout text-decoration-none']
                                )
                                . Html::endForm();
                    }
                    NavBar::end();
                    ?>

                    <div class="dropdown d-inline-block">
                        <button class="btn btn-alt-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            <?= Yii::t('language', 'Languages') ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0">
                            <li>
                                <button class="dropdown-item" type="button"><a
                                            href="<?= \yii\helpers\Url::to(['site/change', 'lang' => 'ru']) ?>">RU</a>
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><a
                                            href="<?= \yii\helpers\Url::to(['site/change', 'lang' => 'uz']) ?>">UZ</a>
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><a
                                            href="<?= \yii\helpers\Url::to(['site/change', 'lang' => 'uz-Cyrl']) ?>">ЎЗ</a>
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button"><a
                                            href="<?= \yii\helpers\Url::to(['site/change', 'lang' => 'en']) ?>">EN</a>
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex m-3 me-0">
                        <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                                data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                    class="fas fa-search text-primary"></i></button>
                        <a href="<?= \yii\helpers\Url::to(['/cart/index']) ?>" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span id="cart-quantity"
                                  class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                  style="top: -5px; left: 15px; height: 20px; min-width: 20px;"><?= $cartItemCount ?></span>
                        </a>
                        <div class="d-flex" style="margin-right: 15px">
                            <a href="<?= \yii\helpers\Url::to(['favorite/product-list']) ?>"><i
                                        class="fas fa-heart fa-2x"></i></a>


                        </div>
                        <?php if (!Yii::$app->user->isGuest): ?>
                            <a href="<?= \yii\helpers\Url::to(['/site/profile']) ?>" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        <?php else: ?>
                            <a href="<?= \yii\helpers\Url::to(['/site/login']) ?>" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>

                        <?php endif; ?>

                    </div>
                </div>
            </nav>
        </div>
</header>


<?php if (!empty($this->params['breadcrumbs'])): ?>
    <div class="container-fluid page-header py-5">

        <?= Breadcrumbs::widget([


                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'tag' => 'ol',
                'navOptions' => [],
                'options' => [

                        'class' => 'breadcrumb justify-content-center mb-0',
                        'id' => false,
                ],

        ]) ?>
    </div>

<?php endif; ?>

<?= Alert::widget() ?>
<?= $content ?>


<footer>
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        <div class="container py-5">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="#">
                            <h1 class="text-primary mb-0">Mahsulotlar</h1>

                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mx-auto">
                            <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number"
                                   placeholder="Your Email">
                            <button type="submit"
                                    class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white"
                                    style="top: 0; right: 0;">Subscribe Now
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-end pt-3">
                            <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle"
                               href="<?= $settings->telegram_url ?>"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                               href="<?= $settings->facebook_url ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                               href="<?= $settings->youtube_url ?>"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-secondary btn-md-square rounded-circle"
                               href="<?= $settings->instagram_url ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <p class="text-light mb-3"><?= $settings->description ?></p>

                        <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Shop Info</h4>
                        <a class="btn-link" href="<?= \yii\helpers\Url::to(['site/about']) ?>">About Us</a>
                        <a class="btn-link" href="<?= \yii\helpers\Url::to(['site/contact']) ?>">Contact Us</a>
                        <a class="btn-link" href="">Privacy Policy</a>
                        <a class="btn-link" href="<?= \yii\helpers\Url::to(['support/create']) ?>">Terms & Condition</a>
                        <a class="btn-link" href="">Return Policy</a>
                        <a class="btn-link" href="">FAQs & Help</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php $categories = \common\models\Category::find()->limit(6)->all(); ?>
                    <div class="d-flex flex-column text-start footer-item">

                        <h4 class="text-light mb-3">Categoriyalar</h4>
                        <?php foreach ($categories as $category): ?>
                            <a class="btn-link" href=""><?= $category->name_uz ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Contact</h4>
                        <p>Address: 1429 Netus Rd, NY 48247</p>
                        <p>Email: Example@gmail.com</p>
                        <p>Phone: +0123 4567 8910</p>
                        <p>Payment Accepted</p>
                        <img src="/shop/img/payment.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                            class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
                class="fa fa-arrow-up"></i></a>


</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

?>










