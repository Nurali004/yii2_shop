<?php

use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-6">
    <?= $form->field($model, 'category_id')->dropDownList(
            \common\models\Category::CategoryList(),
            ['prompt' => 'Kategoriyani tanlang...']
    ) ?>

        </div>
        <div class="col-6">

    <?= $form->field($model, 'price')->textInput() ?>
        </div>
    </div>





    <?= $form->field($model, 'description_uz')->widget(TinyMce::className(), [
            'options' => ['rows' => 10],
            'language' => Yii::$app->language,
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
    <?= $form->field($model, 'description_ru')->textarea(['rows' => 4]) ?>
    <?= $form->field($model, 'description_en')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
    ]); ?>

    <div class="row">
        <div class="col-6">
    <?= $form->field($model, 'status')->dropDownList([
            0 => Yii::t('product', 'Inactive'),
            1 => Yii::t('product', 'Active'),
    ]); ?>

        </div>
        <div class="col-6">
            <?=  $form->field($model, 'created_at')->widget(DatePicker::classname(), [


                    'options' => ['placeholder' => 'Sanani tanlang...'],
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'pickerIcon' => '<i class="fas fa-calendar-alt text-primary"></i>',
                    'removeIcon' => '<i class="fas fa-trash text-danger"></i>',
                    'size' => 'lg',
                    'pluginOptions' => [

                            'autoclose' => true,
                            'format' => 'yyyy-m-d'
                    ]
            ]); ?>


        </div>
    </div>


    <div class="row">
        <div class="col-6">
    <?= $form->field($model, 'order')->dropDownList([
            0 => Yii::t('product', 'Faol Emas'),
            1 => Yii::t('product', 'Faol'),
    ]) ?>

        </div>

        <div class="col-6">
    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*', 'class'=>'form-control']) ?>

        </div>
    </div>

    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
