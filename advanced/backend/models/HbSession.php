<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_session_comment".
 *
 * @property integer $uid
 * @property string $ip
 * @property string $dateline
 * @property integer $errorcount
 */
class HbSession extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_session_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'ip'], 'required'],
            [['uid', 'errorcount'], 'integer'],
            [['dateline'], 'safe'],
            [['ip'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'ip' => 'Ip',
            'dateline' => 'Dateline',
            'errorcount' => 'Errorcount',
        ];
    }
}
