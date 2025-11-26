<?php use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
        <?= Yii::$app->session->getFlash('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

  <?php $customer_form = ActiveForm::begin([
                    'id' => 'customer-form',
                'action' => ['update-profile'],
                'options' => ['data-pjax' => true],
            ]); ?>
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
