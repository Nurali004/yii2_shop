<?php

$name = 'name_' . Yii::$app->language;
use common\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('category', 'Categories');
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
                <?= Html::a(Yii::t('category','Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
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
                                'attribute' => 'pid',
                                'filter' => \yii\helpers\ArrayHelper::map(\common\models\Category::find()->asArray()->all(), 'id', $name),
                            'filterType' => GridView::FILTER_SELECT2,
                            'filterWidgetOptions' => [
                                    'pluginOptions' => ['allowClear' => true],
                                'options' => ['prompt' => Yii::t('category', 'Select Category')],
                            ],
                                'value' => function ($model) use ($name) {
                                    return $model->p->$name ?? $model->p->$name ?? null;
                                },
                        ],

                        [
                                'attribute' => 'name'.'_'.Yii::$app->language,

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
                                    return Yii::t('category', 'Faol');
                                }
                                return Yii::t('category', 'Faol emas');
                            }


                        ],
                        [
                                'class' => ActionColumn::class,
                                'template' => Yii::$app->user->identity->role === 'admin'
                                        ? '{view} {update} {delete}'
                                        : '{view}',
                                'urlCreator' => function ($action, Category $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                        ],
                ],
        ]); ?>

        <?php Pjax::end(); ?>

    </div>
</div>
