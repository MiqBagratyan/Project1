<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class RegistrationForm extends Model
{
    public $name;
    public $lastname;
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['name', 'lastname', 'login', 'password'], 'required'],
            ['login', 'login'],
            ['name', 'string', 'min' => 3, 'max' => 255],
            ['lastname', 'string', 'min' => 3, 'max' => 255],
            ['password', 'string', 'min' => 6],
            ['login', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This login has already been taken.'],
        ];
    }

    public function register()
    {
        if ($this->validate()) {
            $user = new User();
            $user->name = $this->name;
            $user->lastname = $this->lastname;
            $user->login = $this->login;
            $user->setPassword($this->password);

            if ($user->save()) {
                return true;
            } else {
                Yii::error('User registration failed: ' . json_encode($user->errors));
            }
        }

        return false;
    }
}