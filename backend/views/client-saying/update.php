<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ClientSaying $model */

$this->title = 'Update Client Saying: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Client Sayings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="client-saying-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
