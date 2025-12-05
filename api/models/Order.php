<?php

namespace api\models;

use common\models\User;

class Order extends \common\models\Order
{
    public function fields()
    {
        $fields = parent::fields();
        unset($fields['created_at'], $fields['updated_at']);
        return $fields;


    }

    public function extraFields()
    {
        return [
            'user' => function ($model) {
                if (!$model->user) return null;

                $user = $model->user->toArray();
                unset(
                    $user['email'],
                    $user['auth_key'],
                    $user['password_hash'],
                    $user['password_reset_token']
                );

                return $user;
            }
        ];
    }


}