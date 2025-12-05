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

$this->title = Yii::t('product', 'Products');
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->language == 'uz-Cyrl') {
    $lang = 'uz';
}elseif (Yii::$app->language == 'en') {
    $lang = 'en';
}elseif (Yii::$app->language == 'ru') {
    $lang = 'ru';
}else{
    $lang = 'uz';
}
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


                <p>
                    <?= Html::a(Yii::t('product', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
                </p>





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
                            'name_'.$lang,




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
//                        [
//                                'attribute' => 'description',
//                                'format' => 'html',
//
//],
                        [
                                'attribute' => 'status',
                            'value' => function ($model) {
                             return $model->status ? Yii::t('product', 'Active') : Yii::t('product', 'Inactive');
                            }

                        ],
                        [
                                'attribute' => 'order',
                            'value' => function ($model) {
                             return $model->order ? Yii::t('product', 'Faol') : Yii::t('partner', 'Faol Emas');
                            }
                        ],

                        //'updated_at',
                            [
                                    'class' => ActionColumn::class,
                                    'template' => Yii::$app->user->identity->role === 'admin'
                                            ? '{view} {update} {delete}'
                                            : '{view} {update}',
//
                                    'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                                        return Url::toRoute([$action, 'id' => $model->id]);
                                    }
                            ],
                    ],
            ]); ?>

            <?php Pjax::end(); ?>
        </div>
    </div>


