<?php
namespace app\controllers;

use Yii;

use app\models\User;
use yii\web\View;
use yii\web\Controller;
use yii\db\IntegrityException;
use yii\web\NotFoundHttpException;
use yii\filters\{VerbFilter, AccessControl};
use yii\helpers\Url;
use yii\web\UploadedFile;

class UserController extends Controller
{
    public $password;
    public $defaultAction = 'setting';
    private $arrayActions = ['index', 'quote', 'poem', 'author',
                             'create', 'update', 'delete',
                             'create-author','update-author','delete-author',
                             'setting'];

    public function behaviors()
    {
        return [
                   'access' =>
                   [
                       'class' => AccessControl::className(),
                       'only' =>  $this->arrayActions,
                       'rules' => [
                           [
                               'roles' => ['?'],
                               'allow' => true,
                               'actions' => ['login'],
                           ],
                           [
                               'roles' => ['user'],
                               'allow' => true,
                               'actions' => $this->arrayActions,
                           ],
                       ],
                   ],
                   'verbs' => [
                       'class' => VerbFilter::className(),
                       'actions' => [
                           'delete' => ['post'],
                           'delete-author' => ['post'],
                       ],
                   ],
               ];
    }


    public function actionIndex()
    {
            return $this->render('index');
    }

    public function actionSetting()
    {
        $model = User::findIdentity(Yii::$app->user->identity->id);

        if ($model->load(Yii::$app->request->post()) ) {

            $model->setPassword($model->password);

            if ($model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'The data saved correctly'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Unexpected problem'));
            }

            return $this->redirect(['setting']);
        } else {
            return $this->render('setting', ['model' => $model]);
        }

    }





}

