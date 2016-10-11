<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

class ProfesorController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionAdminprofesor()
    {
    	$this->layout = 'profesormain';
        return $this->render('adminprofesor');
    }

    public function actionEnvio()
    {
    	$this->layout = 'profesormain';
    	 $shazam;

        foreach ($_POST as $key => $value) {
            $shazam[$key] = $value;
        }
        
        return $this->render('post', array('shazam' => $shazam));
    }
}