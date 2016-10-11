<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%decisionesxronda}}".
 *
 * @property string $decision_id
 * @property string $fk_empresa_id
 * @property string $fk_decoracionxron_id
 * @property string $fk_publicidadxron_id
 * @property string $fk_horariosxron_id
 * @property string $fk_metodospagoxron_id
 * @property string $fk_lineasxron_id
 * @property string $fk_calidadxron_id
 * @property double $decision_precio_venta
 * @property double $decision_volumen_proy
 * @property string $decision_fecha_envio
 * @property string $decision_estado
 *
 * @property CalidadprodRonda $fkCalidadxron
 * @property DecoracionRonda $fkDecoracionxron
 * @property Empresas $fkEmpresa
 * @property HorariosRonda $fkHorariosxron
 * @property LineasprodRonda $fkLineasxron
 * @property MetodospagoRonda $fkMetodospagoxron
 * @property PublicidadRonda $fkPublicidadxron
 */
class Decisionesxronda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%decisionesxronda}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_empresa_id', 'fk_decoracionxron_id', 'fk_publicidadxron_id', 'fk_horariosxron_id', 'fk_metodospagoxron_id', 'fk_lineasxron_id', 'fk_calidadxron_id', 'decision_precio_venta', 'decision_volumen_proy'], 'required'],
            [['fk_empresa_id', 'fk_decoracionxron_id', 'fk_publicidadxron_id', 'fk_horariosxron_id', 'fk_metodospagoxron_id', 'fk_lineasxron_id', 'fk_calidadxron_id'], 'integer'],
            [['decision_precio_venta', 'decision_volumen_proy'], 'number'],
            [['decision_fecha_envio'], 'safe'],
            [['decision_estado'], 'string', 'max' => 12],
            [['fk_calidadxron_id'], 'exist', 'skipOnError' => true, 'targetClass' => CalidadprodRonda::className(), 'targetAttribute' => ['fk_calidadxron_id' => 'calxron_id']],
            [['fk_decoracionxron_id'], 'exist', 'skipOnError' => true, 'targetClass' => DecoracionRonda::className(), 'targetAttribute' => ['fk_decoracionxron_id' => 'decxron_id']],
            [['fk_empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresas::className(), 'targetAttribute' => ['fk_empresa_id' => 'empresa_id']],
            [['fk_horariosxron_id'], 'exist', 'skipOnError' => true, 'targetClass' => HorariosRonda::className(), 'targetAttribute' => ['fk_horariosxron_id' => 'horxron_id']],
            [['fk_lineasxron_id'], 'exist', 'skipOnError' => true, 'targetClass' => LineasprodRonda::className(), 'targetAttribute' => ['fk_lineasxron_id' => 'linxron_id']],
            [['fk_metodospagoxron_id'], 'exist', 'skipOnError' => true, 'targetClass' => MetodospagoRonda::className(), 'targetAttribute' => ['fk_metodospagoxron_id' => 'metxron_id']],
            [['fk_publicidadxron_id'], 'exist', 'skipOnError' => true, 'targetClass' => PublicidadRonda::className(), 'targetAttribute' => ['fk_publicidadxron_id' => 'pubxron_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'decision_id' => 'Decision ID',
            'fk_empresa_id' => 'Fk Empresa ID',
            'fk_decoracionxron_id' => 'Fk Decoracionxron ID',
            'fk_publicidadxron_id' => 'Fk Publicidadxron ID',
            'fk_horariosxron_id' => 'Fk Horariosxron ID',
            'fk_metodospagoxron_id' => 'Fk Metodospagoxron ID',
            'fk_lineasxron_id' => 'Fk Lineasxron ID',
            'fk_calidadxron_id' => 'Fk Calidadxron ID',
            'decision_precio_venta' => 'Decision Precio Venta',
            'decision_volumen_proy' => 'Decision Volumen Proy',
            'decision_fecha_envio' => 'Decision Fecha Envio',
            'decision_estado' => 'Borrador, Enviada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCalidadxron()
    {
        return $this->hasOne(CalidadprodRonda::className(), ['calxron_id' => 'fk_calidadxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDecoracionxron()
    {
        return $this->hasOne(DecoracionRonda::className(), ['decxron_id' => 'fk_decoracionxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkEmpresa()
    {
        return $this->hasOne(Empresas::className(), ['empresa_id' => 'fk_empresa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkHorariosxron()
    {
        return $this->hasOne(HorariosRonda::className(), ['horxron_id' => 'fk_horariosxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkLineasxron()
    {
        return $this->hasOne(LineasprodRonda::className(), ['linxron_id' => 'fk_lineasxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkMetodospagoxron()
    {
        return $this->hasOne(MetodospagoRonda::className(), ['metxron_id' => 'fk_metodospagoxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkPublicidadxron()
    {
        return $this->hasOne(PublicidadRonda::className(), ['pubxron_id' => 'fk_publicidadxron_id']);
    }
}
