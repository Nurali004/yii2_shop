<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Partner $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="partner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-6">

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'order')->dropDownList([
                    0 => Yii::t('partner', 'Faol Emas'),
                    1 => Yii::t('partner', 'Faol'),
            ]) ?>


        </div>
    </div>

    <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
    ]); ?>


    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>





    <?php ActiveForm::end(); ?>

</div>
