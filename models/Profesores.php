<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%profesores}}".
 *
 * @property string $profesor_id
 * @property string $profesor_nombre
 * @property string $profesor_apellido
 * @property string $profesor_email
 * @property string $fk_materia_id
 * @property string $fk_sisacad_legajo
 *
 * @property Rondasxciclo[] $rondasxciclos
 */
class Profesores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%profesores}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profesor_nombre', 'profesor_apellido', 'profesor_email'], 'required'],
            [['fk_materia_id'], 'integer'],
            [['profesor_nombre', 'profesor_apellido', 'profesor_email'], 'string', 'max' => 50],
            [['fk_sisacad_legajo'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'profesor_id' => 'Profesor ID',
            'profesor_nombre' => 'Profesor Nombre',
            'profesor_apellido' => 'Profesor Apellido',
            'profesor_email' => 'Profesor Email',
            'fk_materia_id' => 'Fk Materia ID',
            'fk_sisacad_legajo' => 'Fk Sisacad Legajo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRondasxciclos()
    {
        return $this->hasMany(Rondasxciclo::className(), ['fk_profesor_id' => 'profesor_id']);
    }
}
