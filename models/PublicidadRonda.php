<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_publicidad_ronda".
 *
 * @property string $pubxron_id
 * @property double $pubxron_costo_mes
 * @property string $fk_publicidad_id
 * @property string $fk_ronda_id
 *
 * @property Decisionesxronda[] $decisionesxrondas
 * @property Publicidad $fkPublicidad
 * @property Rondasxciclo $fkRonda
 */
class PublicidadRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_publicidad_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pubxron_costo_mes', 'fk_publicidad_id', 'fk_ronda_id'], 'required'],
            [['pubxron_costo_mes'], 'number'],
            [['fk_publicidad_id', 'fk_ronda_id'], 'integer'],
            [['fk_publicidad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publicidad::className(), 'targetAttribute' => ['fk_publicidad_id' => 'publicidad_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pubxron_id' => 'Pubxron ID',
            'pubxron_costo_mes' => 'Pubxron Costo Mes',
            'fk_publicidad_id' => 'Fk Publicidad ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecisionesxrondas()
    {
        return $this->hasMany(Decisionesxronda::className(), ['fk_publicidadxron_id' => 'pubxron_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkPublicidad()
    {
        return $this->hasOne(Publicidad::className(), ['publicidad_id' => 'fk_publicidad_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }
}
