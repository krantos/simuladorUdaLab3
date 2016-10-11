<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%horarios}}".
 *
 * @property string $horario_id
 * @property string $horario_nombre
 * @property string $horario_descripcion
 *
 * @property HorariosRonda[] $horariosRondas
 */
class Horarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%horarios}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horario_nombre', 'horario_descripcion'], 'required'],
            [['horario_nombre'], 'string', 'max' => 30],
            [['horario_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'horario_id' => 'Horario ID',
            'horario_nombre' => 'Horario Nombre',
            'horario_descripcion' => 'Horario Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHorariosRondas()
    {
        return $this->hasMany(HorariosRonda::className(), ['fk_horario_id' => 'horario_id']);
    }
}
