<?php

namespace api\models;

class Category extends \common\models\Category
{
    public function fields()
    {
        $fields = parent::fields();
        unset($fields['order'], $fields['status']);
        return $fields;

    }

}