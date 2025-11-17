<?php

use common\models\Slider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\SliderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('slider', 'Sliders');
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Table</h3>
        <div class="block-options">
            <div class="block-options-item">
                <code>.table</code>
            </div>
        </div>
    </div>
    <div class="block-content">
        <?php if (Yii::$app->user->can('admin')): ?>

            <p>
                <?= Html::a(Yii::t('slider','Create Slider'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>

        <?php endif; ?>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        [
                                'attribute' => 'name',
                                'filter'=> Html::activeInput('text', $searchModel, 'name', ['class' => 'form-control']),




                        ],
                        [
                                'attribute' => 'img',
                                'format' => 'html',
                                'value' => function ($model) {
                                    return "<img src='/$model->img' alt='$model->img' width='200'>";
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
                        'url:ntext',
                        [
                                'class' => ActionColumn::className(),
                                'template' => Yii::$app->user->identity->role === 'admin'
                                        ? '{view} {update} {delete}'
                                        : '{view}',
                                'urlCreator' => function ($action, Slider $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                        ],
                ],
        ]); ?>

        <?php Pjax::end(); ?>


    </div>
</div>
