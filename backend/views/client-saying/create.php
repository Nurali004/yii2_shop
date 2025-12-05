<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ClientSaying $model */

$this->title = 'Create Client Saying';
$this->params['breadcrumbs'][] = ['label' => 'Client Sayings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-saying-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
