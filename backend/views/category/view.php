<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$name = 'name'. '_'.Yii::$app->language;

/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = $model->$name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('category', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view">



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
                    'attribute' => 'pid',
                'label' => 'Parent',
                'value' => function ($model) {
                    return $model->p->name ?? null;
                }
            ],
            'name'. '_'.Yii::$app->language,
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
                       return Yii::t('category', 'Faol');
                   }
                   return Yii::t('category', 'Faol emas');
                }
            ],
        ],
    ]) ?>

</div>
