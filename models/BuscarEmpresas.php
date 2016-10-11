<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empresas;

/**
 * BuscarEmpresas represents the model behind the search form about `app\models\Empresas`.
 */
class BuscarEmpresas extends Empresas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empresa_id'], 'integer'],
            [['empresa_nombre', 'empresa_estado', 'fk_zona_id'], 'safe'],
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
        $query = Empresas::find();

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
        $query->joinWith('fkZona');
        // grid filtering conditions
        $query->andFilterWhere([
            'empresa_id' => $this->empresa_id,

        ]);

        $query->andFilterWhere(['like', 'empresa_nombre', $this->empresa_nombre])
            ->andFilterWhere(['like', 'empresa_estado', $this->empresa_estado])
              ->andFilterWhere(['like', 'udasim_zonas.zona_nombre', $this->fk_zona_id]);

        return $dataProvider;
    }
}
