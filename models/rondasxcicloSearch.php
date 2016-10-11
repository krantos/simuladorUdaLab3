<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rondasxciclo;

/**
 * rondasxcicloSearch represents the model behind the search form about `app\models\Rondasxciclo`.
 */
class rondasxcicloSearch extends Rondasxciclo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ronxsim_id', 'fk_profesor_id', 'fk_ciclo_id'], 'integer'],
            [['ronxsim_fecha'], 'safe'],
            [['ronxsim_demanda'], 'number'],
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
        $query = Rondasxciclo::find();

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
            'ronxsim_id' => $this->ronxsim_id,
            'ronxsim_fecha' => $this->ronxsim_fecha,
            'ronxsim_demanda' => $this->ronxsim_demanda,
            'fk_profesor_id' => $this->fk_profesor_id,
            'fk_ciclo_id' => $this->fk_ciclo_id,
        ]);

        return $dataProvider;
    }
}
