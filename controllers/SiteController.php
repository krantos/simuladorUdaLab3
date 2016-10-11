<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\ArrayHelper;
use app\models\UdasimUsuarios;

class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    public $respuesta = '  ';

    public function actionIndex()
    {
      $model = new LoginForm;
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
          return $this->render('empresa');
        }
      return $this->render('index',['model'=>$model]);
    }
    public function actionEmpresa()
  {
      return $this->render('empresa');
  }
      public function actionMercado()
    {

        return $this->render('mercado');
    }
    public function actionMercado1(){
      $this->layout = 'mainProfesor';
      return $this->render('mercado1');
    }
    public function actionEmpresas1(){
      $this->layout = 'mainProfesor';
      return $this->render('empresas1');
    }
       public function actionAdministra()
    {
        return $this->render('administra');
    }
       public function actionRegistrarse()
    {
        return $this->render('registrarse');
    }

    public function actionLogin()
    {
      return $this->render('login',array('respuesta' => $this->respuesta));
    }

    public function actionValidate()
    {
      $nombreUsuario = $_POST["nombreUsuario"];
      $pass = $_POST["pass"];

      $modeloUsuario = new UdasimUsuarios();


      $nombreUsuarioTabla = ArrayHelper::map(UdasimUsuarios::find()->all(), 'usuario_id', 'usuario_nombre');

      $paso1 = false;
      $paso2 = false;
      $tipo = 0;
      $idEncontrado = 0;

      foreach ($nombreUsuarioTabla as $key => $value) {
        if($value == $nombreUsuario)
        {
          $paso1 = true;
          $idEncontrado = $key;

        }
      }

      $passUsuarioTabla = ArrayHelper::map(UdasimUsuarios::find()->all(), 'usuario_id', 'usuario_clave');

      foreach ($passUsuarioTabla as $key => $value) {
        if ($value == $pass && $paso1 == true) {
            $paso2 = true;
        }
      }
    
    $usuario_tipo = ArrayHelper::map(UdasimUsuarios::find()->all(), 'usuario_id', 'usuario_tipo');

      foreach ($usuario_tipo as $key => $value) {
        if ($idEncontrado == $key && $paso1 == true) {
            $tipo = $value;
        }
      }

      if($paso2 == true)
      {
        if($tipo == 1){
          return $this->redirect('index.php?r=empresas/index');
        }else{
          return $this->redirect('index.php?r=profesor%2Fadminprofesor');
        }
      }else{
          $this->respuesta = 'ingresaste algo mal';
          return $this->redirect('index.php?r=site%2Flogin');
      }
    }
}
