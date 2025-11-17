<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Customer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <?= $form->field($model, 'l_name')->textInput(['maxlength' => true]) ?>

                    </div>
                    <div class="col-6">

                        <?= $form->field($model, 'f_name')->textInput(['maxlength' => true]) ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">

                        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                    </div>
                    <div class="col-6">

                        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">

                        <?= $form->field($model, 'user_id')->dropDownList([

                                ['prompt'=> Yii::t('universal', 'Select User')],
                                \yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'id', 'username')
                        ]) ?>
                    </div>
                    <div class="col-6">
                        <?= $form->field($model, 'imageFile')->fileInput(['accept' => 'image/*', 'class'=> 'form-control']) ?>


                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
