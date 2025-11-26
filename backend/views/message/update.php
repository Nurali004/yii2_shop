<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Message $model */

$this->title = Yii::t('message', 'Update Message'). ':  ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('message', 'Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'language' => $model->language]];
$this->params['breadcrumbs'][] = Yii::t('universal','Update');
?>
<div class="message-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
