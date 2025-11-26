<?php

use common\models\Support;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\SupportSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('support','Supports');
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
                <?= Html::a(Yii::t('slider',Yii::t('support', 'Create Support')), ['create'], ['class' => 'btn btn-success']) ?>
            </p>

        <?php endif; ?>

        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'pager' => [
                        'class' => yii\bootstrap5\LinkPager::className(),
                ],
                'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'first_name',
                        'email:email',
                        'description:ntext',
                        'status',
                    //'created_at',
                        [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, Support $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                        ],
                ],
        ]); ?>

        <?php Pjax::end(); ?>


    </div>
</div>