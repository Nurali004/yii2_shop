<?php

namespace api\models;

use yii\db\ActiveRecord;

class UserAccessToken extends ActiveRecord
{
    public static function tableName(){
        return '{{%user_access_token}}';
    }

    public function rules(){
        return [
            [['user_id', 'access_token', 'expire_at'], 'safe'],
        ];
    }

}