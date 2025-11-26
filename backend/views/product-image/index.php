<?php

use common\models\ProductImage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\ProductImageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$name = 'name_' . Yii::$app->language;

$this->title =  Yii::t('product-image','Product Images');
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
                    <?= Html::a(Yii::t('product-image','Create Product Image'), ['create'], ['class' => 'btn btn-success']) ?>
                </p>

            <?php endif; ?>

            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'pager' => [

                            'class' => 'yii\bootstrap5\LinkPager',
                    ],
                    'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

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

                                    'filter' => Html::activeDropDownList(
                                            $searchModel,
                                            'product_id',
                                            \common\models\Product::ProductList(),
                                            ['class' => 'form-control', 'prompt' => '']
                                    ),
                                    'value' => function ($model) use($name) {         return $model->product->$name ?? null;
                                    }
                            ],
                            [
                                    'class' => ActionColumn::className(),
                                    'template' => Yii::$app->user->identity->role === 'admin'
                                            ? '{view} {update} {delete}'
                                            : '{view}',
                                    'urlCreator' => function ($action, ProductImage $model, $key, $index, $column) {
                                        return Url::toRoute([$action, 'id' => $model->id]);
                                    }
                            ],
                    ],
            ]); ?>

            <?php Pjax::end(); ?>

        </div>
    </div>

