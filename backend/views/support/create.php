<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Support $model */

$this->title = Yii::t('support','Create Support');
$this->params['breadcrumbs'][] = ['label' => Yii::t('support', 'Create Support'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="support-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
