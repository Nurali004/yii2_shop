<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\ProductImage $model */

$name = 'name_' . Yii::$app->language;

$this->title = $model->product->$name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product-image', 'Product Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-image-view">




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
                    'attribute' => 'image',
                'format' => 'html',
                'value' => function ($model) {
                   return "<img src='/$model->image' alt='$model->image' width='100'>";
                }
            ],
            [
                    'attribute' => 'product_id',
                     'format' => 'raw',
                'value' => function ($model) use ($name) {
                   return $model->product->$name;
                }
            ],
        ],
    ]) ?>

</div>
