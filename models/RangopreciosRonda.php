<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_rangoprecios_ronda".
 *
 * @property string $ranxron_id
 * @property double $ranxron_precio_min
 * @property double $ranxron_precio_max
 * @property string $fk_rangoprecio_id
 * @property string $fk_ronda_id
 *
 * @property Rangoprecios $fkRangoprecio
 * @property Rondasxciclo $fkRonda
 */
class RangopreciosRonda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_rangoprecios_ronda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ranxron_precio_min', 'fk_rangoprecio_id', 'fk_ronda_id'], 'required'],
            [['ranxron_precio_min', 'ranxron_precio_max'], 'number'],
            [['fk_rangoprecio_id', 'fk_ronda_id'], 'integer'],
            [['fk_rangoprecio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rangoprecios::className(), 'targetAttribute' => ['fk_rangoprecio_id' => 'rangop_id']],
            [['fk_ronda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rondasxciclo::className(), 'targetAttribute' => ['fk_ronda_id' => 'ronxsim_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ranxron_id' => 'Ranxron ID',
            'ranxron_precio_min' => 'Ranxron Precio Min',
            'ranxron_precio_max' => 'Ranxron Precio Max',
            'fk_rangoprecio_id' => 'Fk Rangoprecio ID',
            'fk_ronda_id' => 'Fk Ronda ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRangoprecio()
    {
        return $this->hasOne(Rangoprecios::className(), ['rangop_id' => 'fk_rangoprecio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkRonda()
    {
        return $this->hasOne(Rondasxciclo::className(), ['ronxsim_id' => 'fk_ronda_id']);
    }
}
