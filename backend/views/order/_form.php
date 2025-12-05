<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(['id' => 'create-form']); ?>

    <div class="row">
        <div class="col-6">

            <?= $form->field($model, 'user_id')->dropDownList([

                    ['prompt'=> Yii::t('universal', 'Select User')],
                    \yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'id', 'username')
            ]) ?>
        </div>
        <div class="col-6">

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'status')->dropDownList([
                    2 => Yii::t('product', 'Active'),
                    1 => Yii::t('product', 'Process'),
                    0 => Yii::t('product', 'Inactive'),
            ]) ?>
        </div>
        <div class="col-6">

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="form-group mt-3">
        <?= Html::submitButton(Yii::t('universal', 'Save'), ['class' => 'btn btn-success', 'id' => 'save-button']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
