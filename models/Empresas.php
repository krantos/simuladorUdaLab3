<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%empresas}}".
 *
 * @property string $empresa_id
 * @property string $empresa_nombre
 * @property string $empresa_estado
 * @property string $fk_zona_id
 *
 * @property Decisionesxronda[] $decisionesxrondas
 * @property Zonas $fkZona
 * @property Miembros[] $miembros
 */
class Empresas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%empresas}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empresa_nombre', 'fk_zona_id'], 'required'],
            [['fk_zona_id'], 'integer'],
            [['empresa_nombre'], 'string', 'max' => 30],
            [['empresa_estado'], 'string', 'max' => 12],
            [['fk_zona_id'], 'exist', 'skipOnError' => true, 'targetClass' => Zonas::className(), 'targetAttribute' => ['fk_zona_id' => 'zona_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'empresa_id' => 'ID',
            'empresa_nombre' => 'Nombre',
            'empresa_estado' => 'Estado',
            'fk_zona_id' => 'Zona',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecisionesxrondas()
    {
        return $this->hasMany(Decisionesxronda::className(), ['fk_empresa_id' => 'empresa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkZona()
    {
        return $this->hasOne(Zonas::className(), ['zona_id' => 'fk_zona_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiembros()
    {
        return $this->hasMany(Miembros::className(), ['fk_empresa_id' => 'empresa_id']);
    }
}
