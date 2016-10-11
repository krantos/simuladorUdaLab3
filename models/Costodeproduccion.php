<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%costosprod}}".
 *
 * @property string $costosprod_id
 * @property string $costosprod_nombre
 * @property string $costosprod_descripcion
 *
 * @property CostosprodRonda[] $costosprodRondas
 */
class Costodeproduccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%costosprod}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['costosprod_nombre', 'costosprod_descripcion'], 'required'],
            [['costosprod_nombre'], 'string', 'max' => 30],
            [['costosprod_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'costosprod_id' => 'Costosprod ID',
            'costosprod_nombre' => 'Costosprod Nombre',
            'costosprod_descripcion' => 'Costosprod Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostosprodRondas()
    {
        return $this->hasMany(CostosprodRonda::className(), ['fk_costosprod_id' => 'costosprod_id']);
    }
}
