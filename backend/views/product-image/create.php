<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProductImage $model */

$this->title = Yii::t('product-image', 'Create Product Image');
$this->params['breadcrumbs'][] = ['label' => Yii::t('product-image', 'Product Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-image-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
