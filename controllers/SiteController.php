<?php namespace app\controllers;

use Yii;

use app\models\LoginForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller {
public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'login'],
                'rules' => [
                    [
                        'actions' => ['signup', 'login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionUrl(){
        return $this->render('url');
    }

    public function actionSeo(){
        return $this->render('seo');
    }
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
public function actionError()
    {
        return $this->render('error');
    }


	
public function actionSignup()
    {
        $model = new SignupForm();
		
        if ($model->load(Yii::$app->request->post())) {
			
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
					Yii::$app->session->setFlash('success', Yii::t('app', 'Your are logged'));
					return $this->redirect(['surveys/user']);
                }
            }
        }

        return $this->render('signup', ['model' => $model,]);
    }

    
    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionContact() {
        return $this->render('contact');
    }

    public function actionAbout() {
        return $this->render('about');
    }


public function actionRequestPasswordReset() {

        $model = new PasswordResetRequestForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Check your email'));

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', Yii::t('app', 'Sorry, we are unable to reset password for email provided.'));
            }
        }

        return $this->render('requestPasswordResetToken', ['model' => $model,]);
    }
	

public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', Yii::t('app', 'New password was saved'));

            return $this->goHome();
        }

        return $this->render('resetPassword', ['model' => $model,]);
    }
}
