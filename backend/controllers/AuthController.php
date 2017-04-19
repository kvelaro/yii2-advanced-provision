<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\ForgetForm;
use backend\models\RegisterForm;

/**
 * Site controller
 */
class AuthController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'register','forget', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       // return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'unauthenticated';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Forget action.
     *
     * @return string
     */
    public function actionForget()
    {
        $this->layout = 'unauthenticated';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new ForgetForm();
        if ($model->load(Yii::$app->request->post()) && $model->forget()) {
            return $this->goBack();
        } else {
            return $this->render('forget', [
                'model' => $model,
            ]);
        }
    }

    public function actionRegister() {
        $this->layout = 'unauthenticated';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post()) && $model->register()) {
            return $this->goBack();
        } else {
            return $this->render('register', [
                'model' => $model,
            ]);
        }
    }



    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
