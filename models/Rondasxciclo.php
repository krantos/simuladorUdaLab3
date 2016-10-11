<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_rondasxciclo".
 *
 * @property string $ronxsim_id
 * @property string $ronxsim_fecha
 * @property double $ronxsim_demanda
 * @property string $fk_profesor_id
 * @property string $fk_ciclo_id
 *
 * @property CalidadprodRonda[] $calidadprodRondas
 * @property CostosprodRonda[] $costosprodRondas
 * @property DecoracionRonda[] $decoracionRondas
 * @property HorariosRonda[] $horariosRondas
 * @property LineasprodRonda[] $lineasprodRondas
 * @property MetodospagoRonda[] $metodospagoRondas
 * @property PublicidadRonda[] $publicidadRondas
 * @property RangopreciosRonda[] $rangopreciosRondas
 * @property Ciclos $fkCiclo
 * @property Profesores $fkProfesor
 * @property SalariosRonda[] $salariosRondas
 * @property ZonasRonda[] $zonasRondas
 */
class Rondasxciclo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_rondasxciclo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ronxsim_fecha', 'ronxsim_demanda', 'fk_profesor_id', 'fk_ciclo_id'], 'required'],
            [['ronxsim_fecha'], 'safe'],
            [['ronxsim_demanda'], 'number'],
            [['fk_profesor_id', 'fk_ciclo_id'], 'integer'],
            [['fk_ciclo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ciclos::className(), 'targetAttribute' => ['fk_ciclo_id' => 'ciclo_id']],
            [['fk_profesor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profesores::className(), 'targetAttribute' => ['fk_profesor_id' => 'profesor_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ronxsim_id' => 'Ronxsim ID',
            'ronxsim_fecha' => 'Ronxsim Fecha',
            'ronxsim_demanda' => 'Ronxsim Demanda',
            'fk_profesor_id' => 'Fk Profesor ID',
            'fk_ciclo_id' => 'N° Ciclo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalidadprodRondas()
    {
        return $this->hasMany(CalidadprodRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostosprodRondas()
    {
        return $this->hasMany(CostosprodRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecoracionRondas()
    {
        return $this->hasMany(DecoracionRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHorariosRondas()
    {
        return $this->hasMany(HorariosRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLineasprodRondas()
    {
        return $this->hasMany(LineasprodRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodospagoRondas()
    {
        return $this->hasMany(MetodospagoRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublicidadRondas()
    {
        return $this->hasMany(PublicidadRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRangopreciosRondas()
    {
        return $this->hasMany(RangopreciosRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCiclo()
    {
        return $this->hasOne(Ciclos::className(), ['ciclo_id' => 'fk_ciclo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkProfesor()
    {
        return $this->hasOne(Profesores::className(), ['profesor_id' => 'fk_profesor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalariosRondas()
    {
        return $this->hasMany(SalariosRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZonasRondas()
    {
        return $this->hasMany(ZonasRonda::className(), ['fk_ronda_id' => 'ronxsim_id']);
    }
}
