<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Partner $model */

$this->title = Yii::t('partner', 'Update Partner').': '  . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('partner', 'Partners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('partner', 'Update');
?>
<div class="partner-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
