<?php

use common\models\Order;
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
                    <?= Html::a(Yii::t('order', 'Create Order'), ['create'], ['class' => 'btn btn-success']) ?>
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
                                    'attribute' => 'user_id',
                                    'filter' => Html::activeDropDownList(
                                            $searchModel,
                                            'user_id',
                                            \common\models\User::UserLists(),
                                            ['class' => 'form-control', 'prompt' => '']
                                    )
                            ],
                            'address',
                            'phone',
                            'created_at',
                            'updated_at',
                            [
                                    'class' => ActionColumn::className(),
                                     'template' => Yii::$app->user->identity->role === 'admin'
                                     ? '{view} {update} {delete}'
                                     : '{view}',
                                    'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                                        return Url::toRoute([$action, 'id' => $model->id]);
                                    }
                            ],
                    ],
            ]); ?>

            <?php Pjax::end(); ?>
            </div>
        </div>

