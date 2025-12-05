<?php

namespace api\models;

class Favorite extends \common\models\Favorite
{
    public function fields(){
        $fields = parent::fields();
        unset($fields['created_at']);
        return $fields;
    }

    public function extraFields()
    {
        return [
            'product' => function ($model) {
              if ($model->product->category->pid == 1) {
                  return $model->product->category->p->name_uz;
              };
              return $model->product->name_uz;
            },

            'user'];

    }  //categoriyalarning pid si chiqadi

}