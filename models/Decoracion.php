<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%decoracion}}".
 *
 * @property string $decoracion_id
 * @property string $decoracion_nombre
 * @property string $decoracion_descripcion
 *
 * @property DecoracionRonda[] $decoracionRondas
 */
class Decoracion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%decoracion}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['decoracion_nombre', 'decoracion_descripcion'], 'required'],
            [['decoracion_nombre'], 'string', 'max' => 30],
            [['decoracion_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'decoracion_id' => 'Decoracion ID',
            'decoracion_nombre' => 'Decoracion Nombre',
            'decoracion_descripcion' => 'Decoracion Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecoracionRondas()
    {
        return $this->hasMany(DecoracionRonda::className(), ['fk_decoracion_id' => 'decoracion_id']);
    }
}
