<?php

use common\models\Order;
use yii\bootstrap5\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\OrderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('order', 'Orders');
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
                <?= Html::a(Yii::t('order', 'Create Order'), ['create'], ['class' => 'btn btn-success', 'id' => 'create-button']) ?>
            </p>

        <?php endif; ?>

        <?php Pjax::begin(['id' => 'prl-pjax']); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        [
                                'attribute' => 'user_id',
                            'value'=> 'user.username',
                        ],
                        'address',
                        'phone',
                        [
                                'attribute' => 'status',
                                'format' => 'html',
                                'filter' => Order::getStatuses(),
                                'value' => function ($model) {
                                   if ($model->status == 1){
                                       return Yii::t('order', 'Processing');
                                   }elseif ($model->status == 2){
                                       return Yii::t('order', 'Delivered');
                                   }elseif ($model->status == 0){
                                       return Yii::t('order', 'Inactive');
                                   }
                                   return Yii::t('order', 'Unknown');
                                }

                        ],

                        'created_at',
                        'updated_at',
                        [
                                'class' => ActionColumn::className(),
                                'template' => Yii::$app->user->identity->role === 'admin'
                                        ? '{view} {update} {details} {delete}'
                                        : '{view}',
                            'buttons' => [
                                    'update' => function ($url, $model, $key) {
                                      return Html::a('<span class="fa fa-edit"></span>', $url, ['class' => 'update-button']);
                                    },
                                'view' => function ($url, $model, $key) {
                                     return Html::a('<span class="fa fa-eye"></span>', $url, ['class' => 'view-button']);
                                },
                                'details' => function ($url, $model, $key) {
                                     return Html::a('<span class="fa fa-info-circle"></span>', ['order/cart-item', 'id'=> $model->id], ['class' => 'cart-button']);
                                }
                            ],
                                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                        ],
                ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>
</div>

<?php

Modal::begin([
        'id' => 'myModal',
        'title' => '<h2>'.Yii::t('order', 'Order Information') .'</h2>',
        'size' => Modal::SIZE_LARGE,

]);

echo "<div id='modal-content'></div>";

Modal::end();
?>

