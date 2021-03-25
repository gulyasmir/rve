<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\About;

/**
 * AboutSearch represents the model behind the search form about `backend\models\About`.
 */
class AboutSearch extends About
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'description', 'keywords', 'video', 'title1', 'text1', 'title2', 'text2', 'title3', 'text3', 'title4', 'text4', 'title5', 'text5', 'title6', 'text6'], 'safe'],
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
        $query = About::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'title1', $this->title1])
            ->andFilterWhere(['like', 'text1', $this->text1])
            ->andFilterWhere(['like', 'title2', $this->title2])
            ->andFilterWhere(['like', 'text2', $this->text2])
            ->andFilterWhere(['like', 'title3', $this->title3])
            ->andFilterWhere(['like', 'text3', $this->text3])
            ->andFilterWhere(['like', 'title4', $this->title4])
            ->andFilterWhere(['like', 'text4', $this->text4])
            ->andFilterWhere(['like', 'title5', $this->title5])
            ->andFilterWhere(['like', 'text5', $this->text5])
            ->andFilterWhere(['like', 'title6', $this->title6])
            ->andFilterWhere(['like', 'text6', $this->text6]);

        return $dataProvider;
    }
}
