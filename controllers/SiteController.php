<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleSearch;
use app\models\Category;
use app\models\Comment;
use app\models\CommentForm;
use app\models\Tag;
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

    public $statusActive = 1;

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
        $articles =  new ActiveDataProvider([
            'query' => Article::find()->where(['status' => 1])->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'articles'=>$articles,
        ]);
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

    public function actionView($id){
        $commentForm = new CommentForm();
        $articleModel = Article::find()->where(['id'=>$id])->one();

        $article = new ActiveDataProvider([
            'query' => Article::find()->where(['id'=>$id]),
            'pagination' => [
                'pageSize' => false,
            ],
        ]);

        $comments = new ActiveDataProvider([
            'query' => Comment::find()->where(['article_id'=>$id])->andWhere(['status'=>$this->statusActive]),
            'pagination' => [
                'pageSize' => false,
            ],
        ]);

        return $this->render('view',[
            'article'=>$article,
            'comments'=>$comments,
            'commentForm'=>$commentForm,
            'articleModel'=>$articleModel,
        ]);
    }


    public function actionCategory($id){
        $articles =  new ActiveDataProvider([
            'query' => Article::find()->where(['category_id' => $id]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('category', [
            'articles'=>$articles,
        ]);
    }

    public function actionComment($id){
        $model = new CommentForm();
        if (Yii::$app->request->isPost){

            $model->load(Yii::$app->request->post());
            if ($model->saveComment($id)){
                Yii::$app->getSession()->setFlash('comment', 'Your comment will be added soon!');
                return $this->redirect(['site/view','id'=>$id]);
            }
        }

    }

}
