<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%publicidad}}".
 *
 * @property string $publicidad_id
 * @property string $publicidad_nombre
 * @property string $publicidad_descripcion
 *
 * @property PublicidadRonda[] $publicidadRondas
 */
class Publicidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%publicidad}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['publicidad_nombre', 'publicidad_descripcion'], 'required'],
            [['publicidad_nombre'], 'string', 'max' => 30],
            [['publicidad_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'publicidad_id' => 'Publicidad ID',
            'publicidad_nombre' => 'Publicidad Nombre',
            'publicidad_descripcion' => 'Publicidad Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublicidadRondas()
    {
        return $this->hasMany(PublicidadRonda::className(), ['fk_publicidad_id' => 'publicidad_id']);
    }
}
