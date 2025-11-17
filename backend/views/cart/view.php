<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Cart $model */

$name = 'name_'.Yii::$app->language;

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('cart', 'Carts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cart-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->identity->role === 'admin'): ?>

        <p>
            <?= Html::a(Yii::t('universal', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('universal', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                    ],
            ]) ?>
        </p>

    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                    'attribute' => 'user_id',
                'value' => function ($model) {
                    return $model->user->username;
                }
            ],
            [
                    'attribute' => 'product_id',
                'value' => function ($model) use ($name) {
                    return $model->product->$name;
                }
            ],
            'count',
        ],
    ]) ?>

</div>
