<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleSearch;
use app\models\Category;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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


    public function actions()
    {
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


    function actionIndex()
    {
        $articles = new ActiveDataProvider([
            'query' => Article::find()->where(['status' => 1])->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);


        $popular = new ActiveDataProvider([
            'query' => Article::find()->orderBy('viewed DESC')->limit(3),
            'pagination' => false,
        ]);

        $recent = new ActiveDataProvider([
            'query' => Article::find()->orderBy('date DESC')->limit(4),
            'pagination' => false,
        ]);

        $category = new ActiveDataProvider([
            'query' => Category::find(),
            'pagination' => false,
        ]);

        return $this->render('index', [
            'articles'=>$articles,
            'popular'=>$popular,
            'recent'=>$recent,
            'category'=>$category,
        ]);
    }


    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }


    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionView(){
        return $this->render('view');
    }


    public function actionCategory(){
        return $this->render('category');
    }

}
