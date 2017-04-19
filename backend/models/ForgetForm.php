<?php
namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class ForgetForm extends Model
{
    public $username;
    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username'], 'required'],
            ['username', 'ifUserExist']
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */

    public function forget()
    {
        if ($this->validate()) {
            $newPassword = Yii::$app->security->generateRandomString(6);
            $this->_user->password_hash = $newPassword;
            $this->_user->save();
            Yii::$app->mailer
                ->compose('forget', ['password' => $newPassword])
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo($this->_user->email)
                ->setSubject('Востановление пароля')
                ->send();
        } else {
            return false;
        }
    }

    public function ifUserExist($attribute) {
        if(!$this->getUser()) {
            $this->addError($attribute, 'Такого пользователя нет.');
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = DbUser::findByUsername($this->username);
        }

        return $this->_user;
    }
}
