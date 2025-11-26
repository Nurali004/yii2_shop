<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Slider $model */

$this->title = Yii::t('slider', 'Create Slider');
$this->params['breadcrumbs'][] = ['label' => Yii::t('slider', 'Sliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
