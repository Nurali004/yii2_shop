<?php

use common\models\Customer;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\CustomerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('customer', 'Customers');
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
                <?= Html::a(Yii::t('customer', 'Create Customer'), ['create'], ['class' => 'btn btn-success']) ?>
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
                                'attribute' => 'img',
                            'format' => 'html',
                            'value' => function ($model) {
                             return "<img src='/$model->img' alt='$model->img' width='100'>";
                            }
                        ],
                        [
                                'attribute' => 'user_id',
                               'value' => 'user.username',
                        ],
                        'f_name',
                        'l_name',
                        'phone',
                        'address',
                        [
                                'class' => ActionColumn::className(),
                                'template' => Yii::$app->user->identity->role === 'admin'
                                        ? '{view} {update} {delete}'
                                        : '{view}',
                                'urlCreator' => function ($action, Customer $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                        ],
                ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>
</div>
