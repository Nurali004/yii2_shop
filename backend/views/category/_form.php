<?php

use common\models\Category;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Category $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-6">
    <?= $form->field($model, 'pid')->dropDownList(
            Category::CategoryList(),
            ['prompt'=> 'Kategoriyani tanlang...']
    ) ?>

        </div>
        <div class="col-6">
    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>


        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
    <?= $form->field($model, 'order')->dropDownList([
            0 => Yii::t('category', 'Faol emas'),
            1 => Yii::t('category', 'Faol'),
    ]) ?>

        </div>
        <div class="col-6 mt-2">
    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

        </div>
    </div>

    <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
    ]); ?>



    <?php ActiveForm::end(); ?>

</div>
