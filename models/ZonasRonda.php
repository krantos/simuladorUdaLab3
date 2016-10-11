<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_zonas_ronda".
 *
 * @property string $zonxron_id
 * @property double $zonxron_alquiler_mes
 * @property string $fk_zona_id
 * @property string $fk_ronda_id
 *
 * @property Rondasxciclo $fkRonda
 * @property Zonas $fkZona
 */
class ZonasRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_zonas_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zonxron_alquiler_mes', 'fk_zona_id', 'fk_ronda_id'], 'required'],
            [['zonxron_alquiler_mes'], 'number'],
            [['fk_zona_id', 'fk_ronda_id'], 'integer'],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
            [['fk_zona_id'], 'exist', 'skipOnError' => true, 'targetClass' => Zonas::className(), 'targetAttribute' => ['fk_zona_id' => 'zona_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'zonxron_id' => 'Zonxron ID',
            'zonxron_alquiler_mes' => 'Zonxron Alquiler Mes',
            'fk_zona_id' => 'Fk Zona ID',
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
    public function getFkZona()
    {
        return $this->hasOne(Zonas::className(), ['zona_id' => 'fk_zona_id']);
    }
}
