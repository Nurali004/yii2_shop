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

$this->title = 'Product Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-image-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product Image', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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
                    'filter' => Html::activeDropDownList($searchModel, 'product_id',
                            \common\models\Product::ProductList(),
                            ['class'=> 'form-control', 'prompt'=> 'Select Product']

                    )
//                    'filter' => Html::activeDropDownList(
//                            $searchModel,
//                            'product_id',
//                            \common\models\Product::ProductList(),
//                            ['class' => 'form-control', 'prompt' => '']
//                    ),
//                    'value' => function ($model) {
//                        return $model->product->name ?? null;
//                    }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProductImage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
