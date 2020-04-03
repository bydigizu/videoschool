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
        $faker = \Faker\Factory::create();
        
        $this->name = $faker->name;
        $this->email = $faker->freeEmail;
        $this->setPassword($faker->password);
        $this->status = $faker->randomDigit;
    }
    
    public static function existsEmail($email)
    {
        $count = static::find()->where(['email' => $email])->count();
        return $count > 0;
    }
    
    public static function findUserByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    public function setUserJoinForm($userJoinForm)
    {
        $this->name = $userJoinForm->name;
        $this->email = $userJoinForm->email;
        $this->setPassword($userJoinForm->password);
        $this->status = 1;
    }
    
    public function setPassword($password)
    {
        $this->passhash = $password;
    }

}
