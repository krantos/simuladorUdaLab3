<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_ciclos".
 *
 * @property string $ciclo_id
 * @property string $ciclo_descripcion
 * @property string $ciclo_fecha_inicio
 * @property string $ciclo_fecha_fin
 * @property integer $ciclo_max_cant_empr
 * @property integer $ciclo_max_alum_empr
 *
 * @property Rondasxciclo[] $rondasxciclos
 */
class Ciclos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_ciclos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ciclo_fecha_inicio', 'ciclo_fecha_fin'], 'safe'],
            [['ciclo_max_cant_empr', 'ciclo_max_alum_empr'], 'required'],
            [['ciclo_max_cant_empr', 'ciclo_max_alum_empr'], 'integer'],
            [['ciclo_descripcion'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ciclo_id' => 'Ciclo ID',
            'ciclo_descripcion' => 'Ciclo Descripcion',
            'ciclo_fecha_inicio' => 'Ciclo Fecha Inicio',
            'ciclo_fecha_fin' => 'Ciclo Fecha Fin',
            'ciclo_max_cant_empr' => 'Ciclo Max Cant Empr',
            'ciclo_max_alum_empr' => 'Ciclo Max Alum Empr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRondasxciclos()
    {
        return $this->hasMany(Rondasxciclo::className(), ['fk_ciclo_id' => 'ciclo_id']);
    }
}
