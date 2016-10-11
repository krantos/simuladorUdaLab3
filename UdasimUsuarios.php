<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_usuarios".
 *
 * @property string $usuario_id
 * @property string $usuario_nombre
 * @property string $usuario_clave
 * @property string $usuario_tipo
 * @property string $fk_participante_id
 */
class UdasimUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_nombre', 'usuario_clave', 'usuario_tipo', 'fk_participante_id'], 'required'],
            [['fk_participante_id'], 'integer'],
            [['usuario_nombre'], 'string', 'max' => 20],
            [['usuario_clave'], 'string', 'max' => 130],
            [['usuario_tipo'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'usuario_nombre' => 'Usuario Nombre',
            'usuario_clave' => 'Usuario Clave',
            'usuario_tipo' => 'Usuario Tipo',
            'fk_participante_id' => 'Fk Participante ID',
        ];
    }
}
