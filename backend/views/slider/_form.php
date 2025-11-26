<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-6">

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'url')->textarea(['rows' => 2]) ?>

        </div>
    </div>

        <div class="row">

            <div class="col-6">

    <?= $form->field($model, 'order')->dropDownList([
            0 => 'Faol Emas',
            1 => 'Faol',
    ]) ?>
            </div>
            <div class="col-lg-6 mt-2">
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
