<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProductImage $model */

$this->title = Yii::t('product-image', 'Update Product Image'). ':' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product-image', 'Product Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('partner', 'Update');
?>
<div class="product-image-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
