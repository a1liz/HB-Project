<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $uid
 * @property string $email
 * @property string $username
 * @property string $password
 * @property integer $status
 * @property integer $emailstatus
 * @property string $regdate
 * @property integer $credits
 * @property string $profile
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'email', 'username', 'password', 'status', 'emailstatus', 'regdate', 'credits', 'profile'], 'required'],
            [['uid', 'status', 'emailstatus', 'credits'], 'integer'],
            [['regdate'], 'safe'],
            [['profile'], 'string'],
            [['email'], 'string', 'max' => 40],
            [['username', 'password'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => Yii::t('app', 'Uid'),
            'email' => Yii::t('app', 'Email'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'status' => Yii::t('app', 'Status'),
            'emailstatus' => Yii::t('app', 'Emailstatus'),
            'regdate' => Yii::t('app', 'Regdate'),
            'credits' => Yii::t('app', 'Credits'),
            'profile' => Yii::t('app', 'Profile'),
        ];
    }
}
