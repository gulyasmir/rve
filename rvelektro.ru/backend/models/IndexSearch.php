<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Index;

/**
 * IndexSearch represents the model behind the search form about `backend\models\Index`.
 */
class IndexSearch extends Index
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'description', 'keywords', 'title1', 'text1', 'title2', 'text2', 'text3', 'icon1text', 'icon2text', 'icon3text', 'icon4text', 'icon5text', 'icon6text', 'foto'], 'safe'],
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
        $query = Index::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'title1', $this->title1])
            ->andFilterWhere(['like', 'text1', $this->text1])
            ->andFilterWhere(['like', 'title2', $this->title2])
            ->andFilterWhere(['like', 'text2', $this->text2])
            ->andFilterWhere(['like', 'text3', $this->text3])
            ->andFilterWhere(['like', 'icon1text', $this->icon1text])
            ->andFilterWhere(['like', 'icon2text', $this->icon2text])
            ->andFilterWhere(['like', 'icon3text', $this->icon3text])
            ->andFilterWhere(['like', 'icon4text', $this->icon4text])
            ->andFilterWhere(['like', 'icon5text', $this->icon5text])
            ->andFilterWhere(['like', 'icon6text', $this->icon6text])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
