<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%calidadesprod}}".
 *
 * @property string $calidad_id
 * @property string $calidad_nombre
 * @property string $calidad_descripcion
 *
 * @property CalidadprodRonda[] $calidadprodRondas
 */
class Calidadesprod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%calidadesprod}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['calidad_nombre', 'calidad_descripcion'], 'required'],
            [['calidad_nombre'], 'string', 'max' => 30],
            [['calidad_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'calidad_id' => 'Calidad ID',
            'calidad_nombre' => ' ',
            'calidad_descripcion' => 'Calidad Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalidadprodRondas()
    {
        return $this->hasMany(CalidadprodRonda::className(), ['fk_calidadprod_id' => 'calidad_id']);
    }
}
