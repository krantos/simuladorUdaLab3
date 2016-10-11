<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%metodospago}}".
 *
 * @property string $metpago_id
 * @property string $metpago_nombre
 * @property string $metpago_descripcion
 *
 * @property MetodospagoRonda[] $metodospagoRondas
 */
class Metodospago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%metodospago}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['metpago_nombre', 'metpago_descripcion'], 'required'],
            [['metpago_nombre'], 'string', 'max' => 30],
            [['metpago_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'metpago_id' => 'Metpago ID',
            'metpago_nombre' => 'Metpago Nombre',
            'metpago_descripcion' => 'Metpago Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodospagoRondas()
    {
        return $this->hasMany(MetodospagoRonda::className(), ['fk_metodospago_id' => 'metpago_id']);
    }
}
