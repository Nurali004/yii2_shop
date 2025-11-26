<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/**
 * @var \common\models\User $user
 * @var \common\models\Customer $customer
 */

?>


<div class="row my-4">
    <div class="col-12 mb-3">

        <?= Html::a('Sign Out',['logout'], [
                'data' => [
                        'method' => 'post',
                ],
                'class' => 'btn btn-outline-danger float-right']) ?>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>Customer Information</h3>
            </div>
            <div class="card-body">


                
                
                <?php $form = ActiveForm::begin([
                        'options' => ['enctype' => 'multipart/form-data'],
                        'action' => [
                                'site/customer-update',
                        ]
                ])  ?>
                <div class="div mb-2">
                    <?php if ($customer && $customer->img): ?>
                        <img src="<?= Yii::getAlias('@web') . '/' . $customer->img ?>"
                             width="120px" height="120px">
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-6">

                <?= $form->field($customer, 'l_name') ?>
                    </div>
                    <div class="col-md-6">

                <?= $form->field($customer, 'f_name') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($customer, 'imageFile')->fileInput(['accept' => 'image/*', 'class' => 'form-control'])->label('Upload Image') ?>

                    </div>
                    <div class="col-md-6">

                <?= $form->field($customer, 'phone') ?>
                    </div>
                </div>
                <?= $form->field($customer, 'address') ?>

                <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>

                <?php ActiveForm::end() ?>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">

        <div class="card-header">
            <h3>Profile</h3>
        </div>
        <div class="card-body">
<?php $user_form = ActiveForm::begin([
        'action' => ['site/profile-update'],
]) ?>

<?= $user_form->field($user, 'username') ?>
<?= $user_form->field($user, 'email') ?>

<?= Html::submitButton('Change', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?>

        </div>
        </div>
    </div>
</div>









