<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%hb_article}}".
 *
 * @property integer $aid
 * @property string $title
 * @property string $context
 * @property string $pubdate
 */
class HbArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hb_article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aid'], 'required'],
            [['aid'], 'integer'],
            [['context'], 'string'],
            [['pubdate'], 'safe'],
            [['title'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'title' => 'Title',
            'context' => 'Context',
            'pubdate' => 'Pubdate',
        ];
    }
}
