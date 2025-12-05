<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('slider', 'Sliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="slider-view">


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
            'name',
                [
                        'attribute' => 'img',
                        'format' => 'html',
                        'value' => function ($model) {
                            return "<img src='/$model->img' alt='$model->img' width='200'>";

                        }
                ],
            [
                    'attribute' => 'order',
                'format' => 'html',
                'value' => function ($model) {
                  if ($model->order == 1) {
                      return Yii::t('partner', 'Faol');
                  }
                  return Yii::t('partner', 'Faol Emas');
                }
            ],
            'url:ntext',
        ],
    ]) ?>

</div>



