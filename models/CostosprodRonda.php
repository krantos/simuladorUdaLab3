<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_costosprod_ronda".
 *
 * @property string $cosxron_id
 * @property double $cosxron_costoxkg
 * @property double $cosxron_porc_mix_comercial
 * @property string $fk_costosprod_id
 * @property string $fk_ronda_id
 *
 * @property Costosprod $fkCostosprod
 * @property Rondasxciclo $fkRonda
 */
class CostosprodRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_costosprod_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cosxron_costoxkg', 'fk_costosprod_id', 'fk_ronda_id'], 'required'],
            [['cosxron_costoxkg', 'cosxron_porc_mix_comercial'], 'number'],
            [['fk_costosprod_id', 'fk_ronda_id'], 'integer'],
            [['fk_costosprod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Costosprod::className(), 'targetAttribute' => ['fk_costosprod_id' => 'costosprod_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cosxron_id' => 'Cosxron ID',
            'cosxron_costoxkg' => 'Cosxron Costoxkg',
            'cosxron_porc_mix_comercial' => 'Cosxron Porc Mix Comercial',
            'fk_costosprod_id' => 'Fk Costosprod ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCostosprod()
    {
        return $this->hasOne(Costosprod::className(), ['costosprod_id' => 'fk_costosprod_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }
}
