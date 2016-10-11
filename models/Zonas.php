<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%zonas}}".
 *
 * @property string $zona_id
 * @property string $zona_nombre
 * @property string $zona_descripcion
 *
 * @property Empresas[] $empresas
 * @property ZonasRonda[] $zonasRondas
 */
class Zonas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%zonas}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zona_nombre', 'zona_descripcion'], 'required'],
            [['zona_nombre'], 'string', 'max' => 30],
            [['zona_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'zona_id' => 'Zona ID',
            'zona_nombre' => 'Zona Nombre',
            'zona_descripcion' => 'Zona Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresas()
    {
        return $this->hasMany(Empresas::className(), ['fk_zona_id' => 'zona_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZonasRondas()
    {
        return $this->hasMany(ZonasRonda::className(), ['fk_zona_id' => 'zona_id']);
    }
}
