<?php

$name = 'name_' . Yii::$app->language;



  echo \yii\widgets\DetailView::widget([
     'model' => $category,
     'attributes' => [

         [

             'attribute' => 'name_'.Yii::$app->language,

         ],
         [
             'attribute' => 'order',
             'format' => 'raw',
             'value' => function ($model) {
               return $model->order ? 'Faol' : 'Faol Emas';
             }
         ],
         [
             'attribute' => 'pid',
             'value' => function ($model) use ($name) {
               return $model->p->$name ?? $model->p->$name ?? null;
             }

         ],
         [
             'attribute' => 'img',
             'format' => 'html',
             'value' => function ($model) {
               return "<img src='/$model->img' alt='' width='150px'>";
             }
         ]

     ]
 ])


?>
