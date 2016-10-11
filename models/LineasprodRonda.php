<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_lineasprod_ronda".
 *
 * @property string $linxron_id
 * @property double $linxron_incr_costo_prodx
 * @property string $fk_lineasprod_id
 * @property string $fk_ronda_id
 *
 * @property Decisionesxronda[] $decisionesxrondas
 * @property Lineasprod $fkLineasprod
 * @property Rondasxciclo $fkRonda
 */
class LineasprodRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_lineasprod_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['linxron_incr_costo_prodx', 'fk_lineasprod_id', 'fk_ronda_id'], 'required'],
            [['linxron_incr_costo_prodx'], 'number'],
            [['fk_lineasprod_id', 'fk_ronda_id'], 'integer'],
            [['fk_lineasprod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lineasprod::className(), 'targetAttribute' => ['fk_lineasprod_id' => 'linea_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'linxron_id' => 'Linxron ID',
            'linxron_incr_costo_prodx' => 'Linxron Incr Costo Prodx',
            'fk_lineasprod_id' => 'Fk Lineasprod ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecisionesxrondas()
    {
        return $this->hasMany(Decisionesxronda::className(), ['fk_lineasxron_id' => 'linxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkLineasprod()
    {
        return $this->hasOne(Lineasprod::className(), ['linea_id' => 'fk_lineasprod_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }
}
