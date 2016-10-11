<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "udasim_usuarios".
 *
 * @property string $usuario_id
 * @property string $usuario_nombre
 * @property string $usuario_clave
 * @property string $usuario_tipo
 * @property string $fk_participante_id
 */
class UdasimUsuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface

{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'udasim_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_nombre', 'usuario_clave', 'usuario_tipo'], 'required'],
            [['fk_participante_id'], 'integer'],
            [['usuario_nombre'], 'string', 'max' => 20],
            [['usuario_clave'], 'string', 'max' => 130],
            [['usuario_tipo'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'usuario_nombre' => 'Usuario Nombre',
            'usuario_clave' => 'Usuario Clave',
            'usuario_tipo' => 'Usuario Tipo',
            'fk_participante_id' => 'Fk Participante ID',
        ];
    }
    public static function findIdentity($id){
		return static::findOne($id);
	}

	public static function findIdentityByAccessToken($token, $type = null){
		throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
	}

	public function getId(){
		return $this->usuario_id;
	}

	public function getAuthKey(){
		throw new NotSupportedException();
	}

	public function validateAuthKey($authKey){
		throw new NotSupportedException();
	}
	public static function findByUsername($username){
		return self::findOne(['usuario_nombre'=>$username]);
	}

	public function validatePassword($password){
		return $this->usuario_clave === $password;
	}
}
