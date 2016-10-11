<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%salarios}}".
 *
 * @property string $salario_id
 * @property string $salario_nombre
 * @property string $salario_descripcion
 *
 * @property SalariosRonda[] $salariosRondas
 */
class Salarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%salarios}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salario_nombre', 'salario_descripcion'], 'required'],
            [['salario_nombre'], 'string', 'max' => 30],
            [['salario_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'salario_id' => 'Salario ID',
            'salario_nombre' => 'Salario Nombre',
            'salario_descripcion' => 'Salario Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalariosRondas()
    {
        return $this->hasMany(SalariosRonda::className(), ['fk_salarios_id' => 'salario_id']);
    }
}
