<?php

namespace api\models;

class Customer extends \common\models\Customer
{
    public function fields()
    {
        $fields = parent::fields();

        unset($fields['id'], $fields['img']);
        return $fields;

    }

    public function extraFields()
    {
        return [
            'user',
            'cart',
        ];

        //id va img chiqmaydi user qo'shiladi cart null chiqadi

    }

}

