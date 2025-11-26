<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="slider-view">
    

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->identity->role === 'admin'): ?>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
                      return "Faol";
                  }
                  return "Faol Emas";
                }
            ],
            'url:ntext',
        ],
    ]) ?>

</div>



