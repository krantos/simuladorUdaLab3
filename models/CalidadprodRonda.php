<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_calidadprod_ronda".
 *
 * @property string $calxron_id
 * @property double $calxron_incr_costo_prodx
 * @property string $fk_calidadprod_id
 * @property string $fk_ronda_id
 *
 * @property Calidadesprod $fkCalidadprod
 * @property Rondasxciclo $fkRonda
 * @property Decisionesxronda[] $decisionesxrondas
 */
class CalidadprodRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_calidadprod_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['calxron_incr_costo_prodx', 'fk_calidadprod_id', 'fk_ronda_id'], 'required'],
            [['calxron_incr_costo_prodx'], 'number'],
            [['fk_calidadprod_id', 'fk_ronda_id'], 'integer'],
            [['fk_calidadprod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Calidadesprod::className(), 'targetAttribute' => ['fk_calidadprod_id' => 'calidad_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'calxron_id' => 'Calxron ID',
            'calxron_incr_costo_prodx' => 'Calxron Incr Costo Prodx',
            'fk_calidadprod_id' => 'Fk Calidadprod ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCalidadprod()
    {
        return $this->hasOne(Calidadesprod::className(), ['calidad_id' => 'fk_calidadprod_id']);
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
    public function getDecisionesxrondas()
    {
        return $this->hasMany(Decisionesxronda::className(), ['fk_calidadxron_id' => 'calxron_id']);
    }
}
