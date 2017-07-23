<?php

namespace common\models;

use Yii;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\HtmlPurifier;
/**
 * This is the model class for table "hb_article_comment".
 *
 * @property integer $aid
 * @property string $title
 * @property string $content
 * @property string $author
 * @property string $pubdate
 *
 * @property HbTagitemComment[] $hbTagitemComments
 */
class HbArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hb_article_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['pubdate'], 'safe'],
            [['title'], 'string', 'max' => 20],
            [['author'], 'string', 'max' => 11],
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
            'content' => 'Content',
            'author' => 'Author',
            'pubdate' => 'Pubdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHbTagitemComments()
    {
        return $this->hasMany(HbTagitem::className(), ['aid' => 'aid']);
    }

    public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
            [
                'hb-article/detail',
                'id'=>$this->aid,
                'title'=>$this->title,
            ]);
    }

    public function getBeginning($length=200)
    {
        $tmpStr = strip_tags($this->content);
        $tmplen = mb_strlen($tmpStr);
        $tmpStr = mb_substr($tmpStr,0,$length,'utf-8');
        return $tmpStr.($tmplen>$length?'...':''); 
    }
    
    public function getAuthori()
    {
        return $this->hasOne(User::className(), ['id'=>'author']);
    }

     public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
            [
                'hb-article/detail',
                'id'=>$this->aid,
                'title'=>$this->title,
            ]);
    }

    public function getBeginning($length=200)
    {
        $tmpStr = strip_tags($this->content);
        $tmplen = mb_strlen($tmpStr);
        $tmpStr = mb_substr($tmpStr,0,$length,'utf-8');
        return $tmpStr.($tmplen>$length?'...':''); 
    }
    
     public function getAuthori()
    {
        return $this->hasOne(User::className(), ['id'=>'author']);
    }
}
