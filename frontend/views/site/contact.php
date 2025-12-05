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



                        <?= $form->field($model, 'body')->widget(TinyMce::className(), [
                                'options' => ['rows' => 10],
                                'language' => 'en',
                                'clientOptions' => [
                                        'plugins' => 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount',
                                        'toolbar' => 'undo redo | formatselect | bold italic | link image | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | code fullscreen',
                                        'fontsize_formats' => '8pt 10pt 12pt 14pt 18pt 20pt 24pt 36pt',
                                        'image_advtab' => true,
                                        'image_class_list' => [
                                                [
                                                        'value' => '',
                                                        'title' => 'None',
                                                ],
                                                [
                                                        'value' => 'img-circle img-no-padding img-responsive',
                                                        'title' => 'Circle',
                                                ],
                                                [
                                                        'value' => 'img-rounded img-responsive',
                                                        'title' => 'Rounded',
                                                ],
                                                [
                                                        'value' => 'img-thumbnail img-responsive',
                                                        'title' => 'Thumbnail',
                                                ]
                                        ],
                                        'images_upload_url' => \yii\helpers\Url::to(['product/upload-image']),
                                        'plugin_preview_width' => 1110,

                                ]
                        ]);?>

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
