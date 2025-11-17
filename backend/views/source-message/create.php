<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SourceMessage $model */

$this->title = Yii::t('source','Create Source Message');
$this->params['breadcrumbs'][] = ['label' => Yii::t('source','Source Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="source-message-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
