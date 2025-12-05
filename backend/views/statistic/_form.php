<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Statistic $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="statistic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_count')->textInput() ?>

    <?= $form->field($model, 'order_count')->textInput() ?>

    <?= $form->field($model, 'product_count')->textInput() ?>

    <?= $form->field($model, 'product_item')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
