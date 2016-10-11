<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%rangoprecios}}".
 *
 * @property string $rangop_id
 * @property string $rangop_nombre
 * @property string $rangop_descripcion
 *
 * @property RangopreciosRonda[] $rangopreciosRondas
 */
class Rangodeprecios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%rangoprecios}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rangop_nombre', 'rangop_descripcion'], 'required'],
            [['rangop_nombre'], 'string', 'max' => 30],
            [['rangop_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rangop_id' => 'Rangop ID',
            'rangop_nombre' => 'Rangop Nombre',
            'rangop_descripcion' => 'Rangop Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRangopreciosRondas()
    {
        return $this->hasMany(RangopreciosRonda::className(), ['fk_rangoprecio_id' => 'rangop_id']);
    }
}
