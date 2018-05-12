<?php
namespace app\controllers;

use Yii;
class MongoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $collection = Yii::$app->db2->getCollection('test');
        $collection->insert(['name' => 'test']);

        return $this->render('index');
    }

}
