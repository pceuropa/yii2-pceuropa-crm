<?php namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class SignupForm extends Model {
    
    public $email;
    public $password;
    public function rules() {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }


public function signup() {
    if ($this->validate()) {
        $user = new User();
        $user->username = $this->email;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->save(false);
		
        $auth = Yii::$app->authManager;
        $authorRole = $auth->getRole('user');
        $auth->assign($authorRole, $user->getId());

        return $user;
    }

          return null;
    }
	
	public function attributeLabels() {
        return [
            'password' => Yii::t('app', 'Password'),
        ];
    }
}
