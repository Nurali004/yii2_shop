<?php

use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Support $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="support-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-6">

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">


        </div>
        <div class="col-6">

    <?= $form->field($model, 'created_at')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter birth date ...'],
            'pluginOptions' => [
                    'autoclose' => true,
                'format' => 'yyyy-mm-dd',
            ]
    ]) ?>
        </div>
    </div>



    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
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


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
