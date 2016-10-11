<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_metodospago_ronda".
 *
 * @property string $metxron_id
 * @property double $metxron_porc_costo_financ
 * @property integer $metxron_tiempo_acredita
 * @property string $fk_metodospago_id
 * @property string $fk_ronda_id
 *
 * @property Decisionesxronda[] $decisionesxrondas
 * @property Metodospago $fkMetodospago
 * @property Rondasxciclo $fkRonda
 */
class MetodospagoRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_metodospago_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['metxron_porc_costo_financ', 'fk_metodospago_id', 'fk_ronda_id'], 'required'],
            [['metxron_porc_costo_financ'], 'number'],
            [['metxron_tiempo_acredita', 'fk_metodospago_id', 'fk_ronda_id'], 'integer'],
            [['fk_metodospago_id'], 'exist', 'skipOnError' => true, 'targetClass' => Metodospago::className(), 'targetAttribute' => ['fk_metodospago_id' => 'metpago_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'metxron_id' => 'Metxron ID',
            'metxron_porc_costo_financ' => 'Metxron Porc Costo Financ',
            'metxron_tiempo_acredita' => 'cantidad de dias',
            'fk_metodospago_id' => 'Fk Metodospago ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecisionesxrondas()
    {
        return $this->hasMany(Decisionesxronda::className(), ['fk_metodospagoxron_id' => 'metxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkMetodospago()
    {
        return $this->hasOne(Metodospago::className(), ['metpago_id' => 'fk_metodospago_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }
}
