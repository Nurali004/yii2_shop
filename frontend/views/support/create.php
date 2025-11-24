<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Support $model */

$this->title = 'Create Support';
$this->params['breadcrumbs'][] = ['label' => 'Supports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="support-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
