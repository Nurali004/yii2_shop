<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Cart $model */
/** @var yii\widgets\ActiveForm $form */

$name = 'name_' . Yii::$app->language;

?>


<div class="cart-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-6">

    <?= $form->field($model, 'user_id')->dropDownList([
            ['prompt'=> Yii::t('universal', 'Select User')],
            \yii\helpers\ArrayHelper::map(\common\models\User::find()->all(),'id','username'),
    ]) ?>
        </div>
        <div class="col-6">

    <?= $form->field($model, 'product_id')->dropDownList([
             ['prompt' => Yii::t('cart', 'Select Product')],
           \yii\helpers\ArrayHelper::map(\common\models\Product::find()->all(),'id',$name)]



    ) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

    <?= $form->field($model, 'count')->textInput() ?>
        </div>
        <div class="col-6">
    <div class="form-group mt-4">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
