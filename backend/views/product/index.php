<?php

use common\models\Category;
use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <?php if (Yii::$app->user->can('admin')): ?>

        <p>
            <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

    <?php endif; ?>



    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pager' => [
                'class' => yii\bootstrap5\LinkPager::class,


],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
          //  'description:ntext',
            'price',
                [
                        'attribute' => 'img',
                        'format' => 'html',
                        'value' => function ($model) {
                            return "<img src='/$model->img' alt='$model->img' width='100'>";
                        }
                ],

                [
                        'attribute' => 'category_id',
                        'filter' => Html::activeDropDownList(
                                $searchModel,
                                'category_id',
                                Category::CategoryList(),
                                ['class' => 'form-control', 'prompt' => '']
                        ),
                        'value' => function ($model) {
                            return $model->category->name ?? null;
                        }
                ],
            //'status',
            //'order',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::class,
//                'template'=> Yii::$app->user->can('admin') ? '{update} {delete}' : '{view}',
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
