<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_horarios_ronda".
 *
 * @property string $horxron_id
 * @property integer $horxron_hs_normales
 * @property integer $horxron_hs_extras
 * @property string $fk_horario_id
 * @property string $fk_ronda_id
 *
 * @property Decisionesxronda[] $decisionesxrondas
 * @property Horarios $fkHorario
 * @property Rondasxciclo $fkRonda
 */
class HorariosRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_horarios_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horxron_hs_normales', 'horxron_hs_extras', 'fk_horario_id', 'fk_ronda_id'], 'required'],
            [['horxron_hs_normales', 'horxron_hs_extras', 'fk_horario_id', 'fk_ronda_id'], 'integer'],
            [['fk_horario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Horarios::className(), 'targetAttribute' => ['fk_horario_id' => 'horario_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'horxron_id' => 'Horxron ID',
            'horxron_hs_normales' => 'cantidad de horas',
            'horxron_hs_extras' => 'cantidad de horas',
            'fk_horario_id' => 'Fk Horario ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecisionesxrondas()
    {
        return $this->hasMany(Decisionesxronda::className(), ['fk_horariosxron_id' => 'horxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkHorario()
    {
        return $this->hasOne(Horarios::className(), ['horario_id' => 'fk_horario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }
}
