<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_salarios_ronda".
 *
 * @property string $salxron_id
 * @property double $salxron_valor
 * @property integer $salxron_hs_extras_max
 * @property string $fk_salarios_id
 * @property string $fk_ronda_id
 *
 * @property Rondasxciclo $fkRonda
 * @property Salarios $fkSalarios
 */
class SalariosRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_salarios_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salxron_valor', 'fk_salarios_id', 'fk_ronda_id'], 'required'],
            [['salxron_valor'], 'number'],
            [['salxron_hs_extras_max', 'fk_salarios_id', 'fk_ronda_id'], 'integer'],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
            [['fk_salarios_id'], 'exist', 'skipOnError' => true, 'targetClass' => Salarios::className(), 'targetAttribute' => ['fk_salarios_id' => 'salario_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'salxron_id' => 'Salxron ID',
            'salxron_valor' => 'Salxron Valor',
            'salxron_hs_extras_max' => 'cantidad de horas',
            'fk_salarios_id' => 'Fk Salarios ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkSalarios()
    {
        return $this->hasOne(Salarios::className(), ['salario_id' => 'fk_salarios_id']);
    }
}
