<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Cart $model */

$this->title = Yii::t('cart', 'Create Cart');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cart', 'Carts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
