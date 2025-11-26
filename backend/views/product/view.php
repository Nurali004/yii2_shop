<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$name = 'name_'.Yii::$app->language;
$description = 'description_'.Yii::$app->language;

$this->title = $model->$name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('product', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('universal', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php if (Yii::$app->user->identity->role === 'admin'): ?>
        <?= Html::a(Yii::t('universal', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?php endif; ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_'.Yii::$app->language,
            [
                    'attribute' => 'description_'.Yii::$app->language,
                'format' => 'html',
                'value' => function($model) use ($description) {
                     return $model->$description;
                }
            ],
            [
                    'attribute' => 'price',
                'label' => Yii::t('product', 'Price'),
            ],
            [
                    'attribute' => 'category_id',
                'value' => function ($model) use ($name) {
                    return $model->category ? $model->category->$name : null;
                }
            ],
            [
                    'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model) {
                   if ($model->status == 1){
                       return '<span class="label label-success">Active</span>';
                   }
                   return '<span class="label label-danger">Inactive</span>';
                }
            ],
                [
                        'attribute' => 'img',
                        'format' => 'html',
                        'value' => function ($model) {
                            return "<img src='/$model->img' alt='$model->img' width='100'>";

                        }
                ],
            [
                    'attribute' => 'order',
                'format' => 'raw',
                'value' => function ($model) {
                   if ($model->order == 1) {
                       return "Faol";
                   }
                   return "Faol Emas";
                }
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

<?php foreach ($images as $image): ?>
<?= "<img src='/$image->image' alt='$image->image' width='100'>";  ?>
<?php endforeach; ?>
