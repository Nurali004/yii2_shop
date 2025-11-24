<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ProductSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="category-search">

    <?php $form = ActiveForm::begin(['method' => 'get']); ?>

    <?= $form->field($model, 'name') ?>



    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <div class="row">
        <div class="col-3">
            <?= $form->field($model, 'category_id')->dropDownList([
                    \common\models\Category::CategoryList(),
                    ['prompt' => 'Select Category']
            ]) ?>
        </div>
        <div class="col-6">

        </div>
        <div class="col-3"></div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
