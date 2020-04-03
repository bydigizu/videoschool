<?php


namespace app\models;

use yii\web\IdentityInterface;


class UserIdentity extends UserRecord implements IdentityInterface
{
    
    public function getAuthKey(): string
    {
        return $this->authokey;
    }

    public function getId()
    {
        return $this->id;
    }

    public function validateAuthKey($authKey): bool
    {
        return $this->getAuthKey() === $authKey;
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        
    }

}
