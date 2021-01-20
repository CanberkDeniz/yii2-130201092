<?php

namespace canberkdeniz95\players\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use canberkdeniz95\players\models\Transfer;

/**
 * TransferSearch represents the model behind the search form of `canberkdeniz95\players\models\Transfer`.
 */
class TransferSearch extends Transfer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'player_id', 'team_id1', 'team_id2'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Transfer::find();

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
            'player_id' => $this->player_id,
            'team_id1' => $this->team_id1,
            'team_id2' => $this->team_id2,
        ]);

        return $dataProvider;
    }
}
