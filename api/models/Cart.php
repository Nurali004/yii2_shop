<?php

namespace api\models;

class Cart extends \common\models\Cart
{
    public function fields()
    {
        $fields = parent::fields();
        unset($fields['count']);
        return $fields;


    }

    public function extraFields()
    {
        return [
            'product' => function ($model) {
             return $model->product->name_uz;
            },
            'user' => function ($model) {
            return $model->user->username;
            }


        ];

        //userning username va product name chiqadi


    }


}