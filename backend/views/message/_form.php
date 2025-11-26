<?php

use common\models\SourceMessage;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Message $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->dropDownList(
            ArrayHelper::map(
                    SourceMessage::find()->all(),
                    'id',
                    function($model) {
                        return $model->id . ' - ' . $model->category.' - '.$model->message;
                    }

            ),
            ['prompt' => 'Select source message']
    ) ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'translation')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
