<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HbOnlinetimeModel;

/**
 * HbOnlinetimeSearch represents the model behind the search form about `app\models\HbOnlinetimeModel`.
 */
class HbOnlinetimeSearch extends HbOnlinetimeModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'thismonth', 'total'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = HbOnlinetimeModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'uid' => $this->uid,
            'thismonth' => $this->thismonth,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
