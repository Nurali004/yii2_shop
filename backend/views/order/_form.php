<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-6">

    <?= $form->field($model, 'user_id')->dropDownList(
            ['prompt' => 'Select User'],
            \yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'id', 'username')
    ) ?>
        </div>
        <div class="col-6">

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>


    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
