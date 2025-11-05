<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

\backend\assets\AuthorAsset::register($this);
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

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="dashmix/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="dashmix/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="dashmix/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="/admin/dashmix/css/dashmix.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="dashmix/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>


<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('/backend/web/dashmix/media/photos/photo22@2x.jpg');">
            <div class="row g-0 bg-primary-op">
                <!-- Main Section -->
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <!-- Header -->
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="index.html">
                                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <?php $form = ActiveForm::begin([
                                        'id' => 'login-form',
                                        'action' => ['site/login'],
                                        'method' => 'post',
                                        'options' => ['class' => 'js-validation-signin'],
                                ]); ?>

                                <div class="py-3">
                                    <div class="mb-4">
                                        <?= $form->field($model, 'username')->textInput([
                                                'class' => 'form-control form-control-lg form-control-alt',
                                                'placeholder' => 'Username',
                                                'autofocus' => true
                                        ])->label(false) ?>
                                    </div>
                                    <div class="mb-4">
                                        <?= $form->field($model, 'password')->passwordInput([
                                                'class' => 'form-control form-control-lg form-control-alt',
                                                'placeholder' => 'Password'
                                        ])->label(false) ?>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <?= $form->field($model, 'rememberMe')->checkbox(['label' => 'Remember Me']) ?>

                                    <?= Html::submitButton(
                                            '<i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In',
                                            ['class' => 'btn w-100 btn-lg btn-hero btn-primary']
                                    ) ?>

                                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="/site/resetPassword">
                                            <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Forgot password
                                        </a>
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="/site/signup">
                                            <i class="fa fa-plus opacity-50 me-1"></i> New Account
                                        </a>
                                    </p>
                                </div>

                                <?php ActiveForm::end(); ?>

                            </div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <!-- END Main Section -->

                <!-- Meta Info Section -->
                <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                    <div class="p-3">
                        <p class="display-4 fw-bold text-white mb-3">
                            Welcome to the future
                        </p>
                        <p class="fs-lg fw-semibold text-white-75 mb-0">
                            Copyright &copy; <span data-toggle="year-copy"></span>
                        </p>
                    </div>
                </div>
                <!-- END Meta Info Section -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();


?>








