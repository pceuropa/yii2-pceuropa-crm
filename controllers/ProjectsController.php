<?php

namespace app\controllers;

class ProjectsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRadioactive()
    {
        return $this->render('radioactive');
    }

    public function actionUniverse()
    {
        return $this->render('universe');
    }

}
