<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Order $model */

$this->title = Yii::t('order', 'Create Order');
$this->params['breadcrumbs'][] = ['label' => Yii::t('order', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
