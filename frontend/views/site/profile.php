<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = ['label' => 'Site', 'url' => ['profile']];

/**
 * @var \common\models\User $user
 * @var \common\models\Customer $customer
 */

?>

<div class="div mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">

                <?= Html::a(Yii::t('site', 'Sign Out'),['logout'], [
                        'data' => [
                                'method' => 'post',
                        ],
                        'class' => 'btn btn-outline-danger float-end']) ?>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?= Yii::t('site', 'Customer Information') ?></h3>
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
                                <?= $form->field($customer, 'imageFile')->fileInput(['accept' => 'image/*', 'class' => 'form-control'])->label(Yii::t('partner', 'ImageFile')) ?>

                            </div>
                            <div class="col-md-6">

                                <?= $form->field($customer, 'phone') ?>
                            </div>
                        </div>
                        <?= $form->field($customer, 'address') ?>

                        <?= Html::submitButton(Yii::t('universal', 'Update'), ['class' => 'btn btn-primary']) ?>

                        <?php ActiveForm::end() ?>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">
                        <h3><?= Yii::t('site', 'Profile') ?></h3>
                    </div>
                    <div class="card-body">
                        <?php $user_form = ActiveForm::begin([
                                'action' => ['site/profile-update'],
                        ]) ?>

                        <?= $user_form->field($user, 'username')->label(Yii::t('site', 'Username')) ?>
                        <?= $user_form->field($user, 'email')->label(Yii::t('setting', 'Email')) ?>

                        <?= Html::submitButton(Yii::t('universal', 'Update'), ['class' => 'btn btn-primary']) ?>

                        <?php ActiveForm::end() ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>










