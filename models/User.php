<?php
namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

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
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
	public $password;
	public $password_repeat;

public static function tableName()
    {
        return '{{%user}}';
    }


public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

public function rules()
    {
    return [
		['email', 'filter', 'filter' => 'trim'],
		['email', 'email'],
		[['password_repeat'], 'compare', 'compareAttribute' => 'password', 'message' => 'Wpisane hasła nie są takie same'],
		['password', 'string', 'min' => 6],
		['status', 'default', 'value' => self::STATUS_ACTIVE],
		['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
    ];
    }

	public function attributeLabels()
{
return [
	'password' => Yii::t('app', 'password'),
	'password_repeat' => Yii::t('app', 'password repeat'),


	];
}

public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }


public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }


public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }
	
public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }


public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }


public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }


public function getId()
    {
        return $this->getPrimaryKey();
    }


public function getAuthKey()
    {
        return $this->auth_key;
    }


public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }


public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }


public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }


public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }


public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }


public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
	

}
