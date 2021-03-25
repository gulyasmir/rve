<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_category', 'instock', 'sort_order', 'to_index'], 'integer'],
            [['title', 'img_to_page_category', 'text', 'img1', 'img2', 'img3', 'pdf1', 'pdf2', 'delivery', 'description', 'keywords', 'tags', 'footer_img_1', 'footer_img_2', 'footer_img_3', 'footer_video', 'link_footer_img_1', 'link_footer_img_2', 'link_footer_img_3'], 'safe'],
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
        $query = Product::find();

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
            'id_category' => $this->id_category,
            'instock' => $this->instock,
            'sort_order' => $this->sort_order,
            'to_index' => $this->to_index,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'img_to_page_category', $this->img_to_page_category])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'img1', $this->img1])
            ->andFilterWhere(['like', 'img2', $this->img2])
            ->andFilterWhere(['like', 'img3', $this->img3])
            ->andFilterWhere(['like', 'pdf1', $this->pdf1])
            ->andFilterWhere(['like', 'pdf2', $this->pdf2])
            ->andFilterWhere(['like', 'delivery', $this->delivery])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'footer_img_1', $this->footer_img_1])
            ->andFilterWhere(['like', 'footer_img_2', $this->footer_img_2])
            ->andFilterWhere(['like', 'footer_img_3', $this->footer_img_3])
            ->andFilterWhere(['like', 'footer_video', $this->footer_video])
            ->andFilterWhere(['like', 'link_footer_img_1', $this->link_footer_img_1])
            ->andFilterWhere(['like', 'link_footer_img_2', $this->link_footer_img_2])
            ->andFilterWhere(['like', 'link_footer_img_3', $this->link_footer_img_3]);

        return $dataProvider;
    }
}
