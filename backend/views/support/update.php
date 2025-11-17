<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Support $model */

$this->title = Yii::t('support', 'Update Support') . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('support','Supports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('partner', 'Update');
?>
<div class="support-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
