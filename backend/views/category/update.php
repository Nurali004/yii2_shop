<?php

use yii\helpers\Html;

$name = 'name_'.Yii::$app->language;


/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = Yii::t('category', 'Update Category'). " ". $model->$name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('category', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->$name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('partner', 'Update');
?>
<div class="category-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
