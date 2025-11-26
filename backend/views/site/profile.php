<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $model \mdm\admin\models\form\ChangePassword */

$this->title = Yii::t('rbac-admin', 'User Profile');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">



    <div class="row">
        <div class="col-lg-6">
            <h3>Password Change</h3>
            <?php $form = ActiveForm::begin(['id' => 'form-change']); ?>
            <?= $form->field($model, 'oldPassword')->passwordInput() ?>
            <?= $form->field($model, 'newPassword')->passwordInput() ?>
            <?= $form->field($model, 'retypePassword')->passwordInput() ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('rbac-admin', 'Change'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>


        <div class="col-lg-6">
            <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= Yii::$app->session->getFlash('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <h3>User Information</h3>
            <?php $customer_form = ActiveForm::begin(['id' => 'customer-form']); ?>
            <div class="row">
                <div class="col-lg-6">

            <?= $customer_form->field($user, 'f_name')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-6">

            <?= $customer_form->field($user, 'l_name')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <?= $customer_form->field($user, 'phone')->textInput(['maxlength' => true]) ?>
            <?= $customer_form->field($user, 'address')->textInput(['maxlength' => true]) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('rbac-admin', 'Change'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

