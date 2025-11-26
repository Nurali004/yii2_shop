<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Message $model */

$this->title = Yii::t('message','Create Message');
$this->params['breadcrumbs'][] = ['label' => Yii::t('message', 'Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
