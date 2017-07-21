<?php
namespace common\models;

use Yii;
use yii\base\Model;
use common\models\HbUserstatus;
use common\models\HbSession;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
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
            $user = $this->getUser();

            $tmpId = $this->getUser()->getID();
            $tmpIp = Yii::$app->request->userIP;
            // 验证密码时自动添加或更新HbSession字段
            $hbsession = HbSession::find()->where(['uid' => $tmpId, 'ip' => $tmpIp])->one();
            if ($hbsession !== null) {
                $hbsession->errorcount += 1;
                $hbsession->update();
            }
            else {
                $hbsession = new HbSession();
                $hbsession->uid = $tmpId;
                $hbsession->ip = $tmpIp;
                $hbsession->save();
            }
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $isSuccess = Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
            // 更新HbUserStatus最后一次登陆ip
            $tmpId = $this->getUser()->getID();
            $tmpIp = Yii::$app->request->userIP;
            $hbuserstatus = HbUserstatus::findOne($tmpId);
            $hbuserstatus->lastip = $tmpIp;
            $hbuserstatus->update();
            // 成功登陆则更新当前帐号的错误登陆次数为0
            $hbsession = HbSession::find()->where(['uid' => $tmpId, 'ip' => $tmpIp])->one();
            if ($hbsession !== null) {
                $hbsession->dateline = date('Y-m-d H:i:s');
                $hbsession->errorcount = 0;
                $hbsession->update();
            }

            return $isSuccess;
        } else {
            return false;
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
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
