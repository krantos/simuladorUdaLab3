<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_decoracion_ronda".
 *
 * @property string $decxron_id
 * @property double $decxron_costo_mes
 * @property string $fk_decoracion_id
 * @property string $fk_ronda_id
 *
 * @property Decisionesxronda[] $decisionesxrondas
 * @property Decoracion $fkDecoracion
 * @property Rondasxciclo $fkRonda
 */
class DecoracionRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_decoracion_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['decxron_costo_mes', 'fk_decoracion_id', 'fk_ronda_id'], 'required'],
            [['decxron_costo_mes'], 'number'],
            [['fk_decoracion_id', 'fk_ronda_id'], 'integer'],
            [['fk_decoracion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Decoracion::className(), 'targetAttribute' => ['fk_decoracion_id' => 'decoracion_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'decxron_id' => 'Decxron ID',
            'decxron_costo_mes' => 'Decxron Costo Mes',
            'fk_decoracion_id' => 'Fk Decoracion ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecisionesxrondas()
    {
        return $this->hasMany(Decisionesxronda::className(), ['fk_decoracionxron_id' => 'decxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDecoracion()
    {
        return $this->hasOne(Decoracion::className(), ['decoracion_id' => 'fk_decoracion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }
}
