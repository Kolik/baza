<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Baza;

/**
 * BazaSearch represents the model behind the search form about `app\models\Baza`.
 */
class BazaSearch extends Baza
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['country', 'provinciya', 'type', 'name', 'link', 'shirota', 'dolgota', 'sohrannost', 'dostupnost', 'tochnost', 'hz', 'opisanie', 'images'], 'safe'],
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
        $query = Baza::find();

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

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'provinciya', $this->provinciya])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'shirota', $this->shirota])
            ->andFilterWhere(['like', 'dolgota', $this->dolgota])
            ->andFilterWhere(['like', 'sohrannost', $this->sohrannost])
            ->andFilterWhere(['like', 'dostupnost', $this->dostupnost])
            ->andFilterWhere(['like', 'tochnost', $this->tochnost])
            ->andFilterWhere(['like', 'hz', $this->hz])
            ->andFilterWhere(['like', 'opisanie', $this->opisanie])
            ->andFilterWhere(['like', 'images', $this->images]);

        return $dataProvider;
    }
}
