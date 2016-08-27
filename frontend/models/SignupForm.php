<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => "Необхідно вказати ім'я."],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => "Дане ім'я вже використовується."],
            ['username', 'string', 'min' => 2, 'max' => 64, 'tooShort' => "Ім'я повинно містити щонайменше 2-ва символи."
                , 'tooLong' => "Ім'я повинно містити щонайбільше 64-ри символи."],

            ['email', 'trim'],
            ['email', 'required', 'message' => "Необхідно вказати адресу електронної пошти."],
            ['email', 'email', 'message' => "Введено некоректну адресу електронної пошти."],
            ['email', 'string', 'max' => 255, 'message' => "Довжина адреси електронної пошти не повина перевищувати 255 символів."],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Дана адреса електронної пошти вже використовується.'],

            ['password', 'required', 'message' => "Необхідно вказати пароль."],
            ['password', 'string', 'min' => 6, 'tooShort' => 'Довжина паролю не повина бути меньшою ніж 6-ть символів.'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
