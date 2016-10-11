<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%miembros}}".
 *
 * @property string $miembro_id
 * @property string $miembro_nombre
 * @property string $miembro_apellido
 * @property string $miembro_email
 * @property string $fk_empresa_id
 * @property string $fk_sisacad_legajo
 *
 * @property Empresas $fkEmpresa
 */
class Miembros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%miembros}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['miembro_nombre', 'miembro_apellido', 'miembro_email', 'fk_empresa_id'], 'required'],
            [['fk_empresa_id'], 'integer'],
            [['miembro_nombre', 'miembro_apellido', 'miembro_email'], 'string', 'max' => 50],
            [['fk_sisacad_legajo'], 'string', 'max' => 15],
            [['fk_empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresas::className(), 'targetAttribute' => ['fk_empresa_id' => 'empresa_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'miembro_id' => 'Miembro ID',
            'miembro_nombre' => 'Miembro Nombre',
            'miembro_apellido' => 'Miembro Apellido',
            'miembro_email' => 'Miembro Email',
            'fk_empresa_id' => 'Empresa',
            'fk_sisacad_legajo' => 'Fk Sisacad Legajo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkEmpresa()
    {
        return $this->hasOne(Empresas::className(), ['empresa_id' => 'fk_empresa_id']);
    }
}
