<?php
namespace backend\models;

use common\models\User;
/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class DbUser extends User
{
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $this->password_hash = \Yii::$app->security->generatePasswordHash($this->password_hash);
        }
        return true;
    }
}
