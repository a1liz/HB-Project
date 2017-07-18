<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hb_tag_comment".
 *
 * @property integer $tagid
 * @property string $tagname
 * @property integer $status
 *
 * @property HbTagitemComment $hbTagitemComment
 */
class HbTagModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_tag_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tagid'], 'required'],
            [['tagid', 'status'], 'integer'],
            [['tagname'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tagid' => 'Tagid',
            'tagname' => 'Tagname',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHbTagitemComment()
    {
        return $this->hasOne(HbTagitemComment::className(), ['tagid' => 'tagid']);
    }
}
