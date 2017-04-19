<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\DbUser;

/**
 * Login form
 */
class RegisterForm extends Model
{
    public $username;
    public $password1;
    public $password2;
    public $email;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password1', 'password2', 'email'], 'required'],
            [['password1', 'password2'], 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if ($this->password1 != $this->password2) {
                $this->addError($attribute, 'Passwords does not match.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function register()
    {
        if ($this->validate()) {
            $newUser = new DbUser();
            $newUser->username = $this->username;
            $newUser->password_hash = $this->password1;
            $newUser->email = $this->email;
            $newUser->status = DbUser::STATUS_ACTIVE;
            return $newUser->save();
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password1' => 'Password',
            'password2' => 'Password'
        ];
    }
}
