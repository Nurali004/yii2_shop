<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'category_id')->dropDownList(
            \common\models\Category::CategoryList(),
            ['prompt' => 'Kategoriyani tanlang...']
    ) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
            'options' => ['rows' => 10],
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

    <?= $form->field($model, 'imageFile')->fileInput(['accept' => 'image/*', 'class'=>'form-control']) ?>

    <?= $form->field($model, 'price')->textInput() ?>



    <?= $form->field($model, 'status')->dropDownList([
            0 => "Faol emas",
        1 => "Faol",
    ]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*', 'class'=>'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
