<?php

namespace app\controllers;

use Yii;
use app\models\Miembros;
use app\models\BuscarMiembro;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UdasimUsuarios;
/**
 * MiembrosController implements the CRUD actions for Miembros model.
 */
class UsuariosController extends Controller
{
    /**
     * @inheritdoc
     */


    /**
     * Lists all Miembros models.
     * @return mixed
     */

    public function actionIndex()
    {
        $model = new UdasimUsuarios();
        return $this->render('createuser',array('model' => $model));
    }
    public function actionCreateuser()
    {
        return $this->render('createuser');
    }
}