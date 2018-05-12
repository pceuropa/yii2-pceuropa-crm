<?php
# @Copyright 2017 Rafal Marguzewicz pceuropa.net

namespace app\controllers;
use Yii;
class Yii2ExtensionsController extends \yii\web\Controller {


    public function actionIndex(){
        return $this->render('index');
    }


    public function actionYii2Menu(){
        return $this->render('yii2-menu');
    }

    public function actionYii2AjaxSort(){
    
		$request = Yii::$app->request;
	
		if ($request->isAjax && $request->post('serialize')){
			return  \yii\helpers\Json::encode(['success' => true,]);
		}
        return $this->render('yii2-ajax-sort');
    }
	
	public function actionYii2LanguageSelectionWidget(){
        return $this->render('yii2-language-selection-widget');
    }
    
    public function actionYii2Charts() {
        return $this->render('yii2-charts');
    }
}
