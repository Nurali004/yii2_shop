<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Cart $model */

$this->title = Yii::t('cart', 'Update Cart');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cart', 'Carts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('partner', 'Update');
?>
<div class="cart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
