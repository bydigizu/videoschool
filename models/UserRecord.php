<?php

namespace app\models;
use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }
    
    public function setTestUser()
    {
        $this->name = 'Krosh';
        $this->email = 'krosh@smesh.sm';
        $this->passhash = 'sz;lhkhjsrtigih5oatyf<ajvhcvrqu';
        $this->status = 2;
    }
}
