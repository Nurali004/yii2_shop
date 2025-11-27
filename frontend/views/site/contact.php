<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use dosamigos\tinymce\TinyMce;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container-fluid contact py-5">
    <div class="container">
        <div class="p-5 bg-light rounded">
            <div class="row g-4">
                <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>

                <p style="text-align: center">
                    If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                </p>

                <div class="row">

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <div class="row">
                            <div class="col-lg-6">

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="col-lg-6">

                        <?= $form->field($model, 'email') ?>
                            </div>
                        </div>



                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= $form->field($model, 'subject') ?>
                        </div>
                        <div class="col-lg-6">
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

                        </div>
                    </div>



                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>

            </div>
        </div>
    </div>
</div>
