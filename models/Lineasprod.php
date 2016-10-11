<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%lineasprod}}".
 *
 * @property string $linea_id
 * @property string $linea_nombre
 * @property string $linea_descripcion
 *
 * @property LineasprodRonda[] $lineasprodRondas
 */
class Lineasprod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lineasprod}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['linea_nombre', 'linea_descripcion'], 'required'],
            [['linea_nombre'], 'string', 'max' => 30],
            [['linea_descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'linea_id' => 'Linea ID',
            'linea_nombre' => 'Linea Nombre',
            'linea_descripcion' => 'Linea Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLineasprodRondas()
    {
        return $this->hasMany(LineasprodRonda::className(), ['fk_lineasprod_id' => 'linea_id']);
    }
}
