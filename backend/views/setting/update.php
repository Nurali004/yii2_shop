<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Setting $model */

$this->title = Yii::t('setting', 'Site Settings');
$this->params['breadcrumbs'][] = ['label' => Yii::t('setting', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('partner', 'Update');
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>



<div class="setting-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
