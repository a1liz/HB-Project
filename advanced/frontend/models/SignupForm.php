<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use common\models\HbSession;
use common\models\HbUserstatus;
use common\models\HbRegip;
use Yii;

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
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
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
        

        $newUser = $user->save() ? $user : null;
        if ($newUser !== null) {
            // 注册时记录用户session
            $tmpId = $newUser->getID();
            $tmpIp = Yii::$app->request->userIP;
            $hbsession = new HbSession();
            $hbsession->uid = $tmpId;
            $hbsession->ip = $tmpIp;
            $hbsession->save();
            // 注册时记录用户ip信息等
            $hbuserstatus = new HbUserstatus();
            $hbuserstatus->uid = $tmpId;
            $hbuserstatus->regip = $tmpIp;
            $hbuserstatus->lastip = $tmpIp;
            $hbuserstatus->save();

            // 记录当前ip已注册账号数量
            $hbregip = HbRegip::findOne($tmpIp);
            if ($hbregip !== null) {
                $hbregip->dateline = date('Y-m-d H:i:s');
                $hbregip->count += 1;
                $hbregip->update();
            }
            else {
                $hbregip =  new HbRegip();
                $hbregip->ip = $tmpIp;
                $hbregip->save();
            }

            return $newUser;
        }
        else 
            return null;
    }
}
