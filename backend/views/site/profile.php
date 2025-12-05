<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $model \mdm\admin\models\form\ChangePassword */

$this->title = Yii::t('user', 'User Profile');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">



    <div class="row">
        <div class="col-lg-6">
            <h3><?= Yii::t('user', 'Password Change') ?></h3>
            <?php $form = ActiveForm::begin(['id' => 'form-change']); ?>
            <?= $form->field($model, 'oldPassword')->passwordInput()->label(Yii::t('user', 'Old Password')) ?>
            <?= $form->field($model, 'newPassword')->passwordInput()->label(Yii::t('user', 'New Password')) ?>
            <?= $form->field($model, 'retypePassword')->passwordInput()->label(Yii::t('user', 'Retype Password')) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('user', 'Change'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>


        <div class="col-lg-6">

            <h3><?= Yii::t('user', 'User Information') ?></h3>
            <?php Pjax::begin(['enablePushState' => false]); ?>
            <?php if (Yii::$app->session->hasFlash('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                    <?= Yii::$app->session->getFlash('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
              <?= $this->renderAjax('update-profile', ['user' => $user]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>

