<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ciclos;

/**
 * ciclosSearch represents the model behind the search form about `app\models\Ciclos`.
 */
class ciclosSearch extends Ciclos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ciclo_id', 'ciclo_max_cant_empr', 'ciclo_max_alum_empr'], 'integer'],
            [['ciclo_descripcion', 'ciclo_fecha_inicio', 'ciclo_fecha_fin'], 'safe'],
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
        $query = Ciclos::find();

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
            'ciclo_id' => $this->ciclo_id,
            'ciclo_fecha_inicio' => $this->ciclo_fecha_inicio,
            'ciclo_fecha_fin' => $this->ciclo_fecha_fin,
            'ciclo_max_cant_empr' => $this->ciclo_max_cant_empr,
            'ciclo_max_alum_empr' => $this->ciclo_max_alum_empr,
        ]);

        $query->andFilterWhere(['like', 'ciclo_descripcion', $this->ciclo_descripcion]);

        return $dataProvider;
    }
}
