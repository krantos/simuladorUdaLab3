<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UdasimUsuarios;
use app\models\CalidadesProd;
use app\models\Decoracion;
use app\models\Horarios;
use app\models\Lineasprod;
use app\models\Metodospago;
use app\models\Publicidad;

class AdministracionController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        $calidades = ArrayHelper::map(CalidadesProd::find()->all(),'calidad_id','calidad_nombre');
        $decoracion = ArrayHelper::map(Decoracion::find()->all(), 'decoracion_id','decoracion_nombre');
        $horarios = ArrayHelper::map(Horarios::find()->all(), 'horario_id','horario_nombre');
        $lineasprod = ArrayHelper::map(Lineasprod::find()->all(), 'linea_id','linea_nombre');
        $metodospago = ArrayHelper::map(Metodospago::find()->all(), 'metpago_id','metpago_nombre');
        $publicidad = ArrayHelper::map(Publicidad::find()->all(), 'publicidad_id','publicidad_nombre');

        return $this->render('index', array('calidades' => $calidades, 'decoracion' => $decoracion, 'horarios' => $horarios, 'lineasprod' => $lineasprod, 'metodospago' => $metodospago, 'publicidad' => $publicidad));
    }
    
    public function actionEmpresa()
    {
      return $this->render('empresa');
    }
      
    public function actionMercado()
    {
        return $this->render('mercado');
    }

    public function actionDecisiones()
    {
        //$modeloDecisionXRonda = new Decoracionxron();

        //$modeloDecisionXRonda->fk_decoracionxron_id = $_POST['inversionDeco'];
        // = decoracion;

        //$modeloDecisionXRonda->save();

        $shazam;

        foreach ($_POST as $key => $value) {
            $shazam[$key] = $value;
        }
        
        return $this->render('post', array('shazam' => $shazam));
    }

    public function actionAdminprofesor()
    {
        return $this->render('adminprofesor');
    }
}
