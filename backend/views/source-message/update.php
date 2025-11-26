<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SourceMessage $model */

$this->title = Yii::t('source', 'Update Source Message') . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('source','Source Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('universal', 'Update');
?>
<div class="source-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
