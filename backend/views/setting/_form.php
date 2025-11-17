<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Setting $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Table</h3>
        <div class="block-options">
            <div class="block-options-item">
                <code>.table</code>
            </div>
        </div>
    </div>
    <div class="block-content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 pb-5">
                    <div class="author-card pb-3">
                        <div class="author-card-profile text-center">
                            <div class="author-card-avatar mt-4">
                                <img src="/<?= $model->logo_img ?>" width="300" alt="<?= $model->site_name ?>" class="img-fluid rounded">
                            </div>
                            <div class="author-card-details">
                                <h2 class="author-card-name text-lg">Logotip</h2>
                                <span class="author-card-position">Joined November 03, 2025</span>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="col-lg-8 pb-5">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'imageFile')->fileInput(['accept' => 'image/*', 'class'=>'form-control']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'facebook_url')->textarea(['rows' => 2]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'telegram_url')->textarea(['rows' => 2]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'instagram_url')->textarea(['rows' => 2]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'youtube_url')->textarea(['rows' => 2]) ?>
                        </div>

                        <div class="col-md-12">
                            <?= $form->field($model, 'description')->widget(TinyMce::class, [
                                    'options' => ['rows' => 5],
                                    'language' => 'ru',
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
                                            'plugin_prevqiew_width' => 1110,
                                    ]
                            ]);?>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <?= Html::submitButton('Update', ['class' => 'btn btn-info']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>






