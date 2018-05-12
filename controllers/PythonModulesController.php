<?php

namespace app\controllers;

class PythonModulesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPyEmailWebsiteDown()
    {
        return $this->render('py-email-website-down');
    }

}
