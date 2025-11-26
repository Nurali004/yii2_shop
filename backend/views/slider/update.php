<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */

$this->title = Yii::t('slider', 'Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('slider', 'Sliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('slider', 'Update');
?>
<div class="slider-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
