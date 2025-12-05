<?php

namespace api\models;

class Partner extends \common\models\Partner
{
    public function fields(){
        $fields = parent::fields();
        unset($fields['order']);
        return $fields;
    }


}