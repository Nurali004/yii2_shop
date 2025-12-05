<?php

use common\models\OrderItem;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\OrderItemSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
if (Yii::$app->language == 'uz-Cyrl') {
    $name = 'name_uz';
}else{
    $name = 'name_' . Yii::$app->language;
}
$this->title = 'Order Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
                'class' => yii\bootstrap5\LinkPager::className(),
        ],
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'id',
            [
                    'attribute' => 'order_id',
                'format' => 'raw',

            ],
            [
                    'attribute' => 'product_id',
                'value' => function ($model) use ($name) {
                     return $model->product->$name;
                }
            ],
            'count',
            'price',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OrderItem $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],

        ],
    ]); ?>



    <?php Pjax::end(); ?>



</div>
