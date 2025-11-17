<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Partner $model */

$this->title = Yii::t('partner', 'Create Partner');
$this->params['breadcrumbs'][] = ['label' => Yii::t('partner', 'Partners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
