<?php

namespace api\models;

class Product extends \common\models\Product
{
    public function fields()
    {
        $fields = parent::fields();
        unset($fields['name_uz'], $fields['name_ru'], $fields['name_en']);
        return $fields;

    }

    public function extraFields()
    {
        return [
            'category' => function ($model) {
               return $model->category->name_uz;
            }
        ];

    }

}