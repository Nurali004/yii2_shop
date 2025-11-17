<?php

use common\models\SourceMessage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\SourceMessageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('source','Source Messages');
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


        <p>
            <?= Html::a(Yii::t('source','Create Source Message'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>

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
                        'category',
                        'message:ntext',
                        [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, SourceMessage $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                        ],
                ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>
</div>
