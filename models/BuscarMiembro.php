<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Miembros;

/**
 * BuscarMiembro represents the model behind the search form about `app\models\Miembros`.
 */
class BuscarMiembro extends Miembros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['miembro_id', 'fk_empresa_id'], 'integer'],
            [['miembro_nombre', 'miembro_apellido', 'miembro_email', 'fk_sisacad_legajo'], 'safe'],
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
        $query = Miembros::find();

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
            'miembro_id' => $this->miembro_id,
            'fk_empresa_id' => $this->fk_empresa_id,
        ]);

        $query->andFilterWhere(['like', 'miembro_nombre', $this->miembro_nombre])
            ->andFilterWhere(['like', 'miembro_apellido', $this->miembro_apellido])
            ->andFilterWhere(['like', 'miembro_email', $this->miembro_email])
            ->andFilterWhere(['like', 'fk_sisacad_legajo', $this->fk_sisacad_legajo]);

        return $dataProvider;
    }
}
