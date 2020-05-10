<?php

namespace app\modules\admin\controllers;

use app\models\Category;
use app\models\Tag;
use PHPUnit\Framework\StaticAnalysis\HappyPath\AssertNotInstanceOf\A;
use Yii;
use app\models\Article;
use app\models\ImageUpload;
use app\models\ArticleSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSetImage($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost) {
            $article = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');

            if ($article->saveImage($model->uploadFile($file, $article->image)))
            {
                return $this->redirect(['view','id'=>$article->id]);
            }

        }

        return $this->render('image', ['model' => $model]);
    }

    public function actionSetCategory($id){

       // $category = Category::findOne($id);


        $article = $this->findModel($id);
        $selectedCategory = $article->category->id;
        $categories = ArrayHelper::map(Category::find()->all(),'id','title');


        if (Yii::$app->request->isPost)
        {
            $category = Yii::$app->request->post('category');
            if ($article->saveCategory($category)){
                return $this->redirect(['view','id'=>$article->id]);
            }

        }


        return $this->render('category',[
            'article'=>$article,
            'selectedCategory'=>$selectedCategory,
            'categories'=>$categories,
        ]);
    }

    public function actionSetTags($id){
      $article = $this->findModel($id);
      $selectedTags = $article->getSelectedTags();
      $tags = ArrayHelper::map(Tag::find()->all(),'id','title');
      if (Yii::$app->request->isPost){
          $tags = Yii::$app->request->post('tags');
          $article->saveTags($tags);
          return $this->redirect(['view','id'=>$article->id]);
      }

      return $this->render('tags',[
         'selectedTags'=>$selectedTags,
          'tags'=>$tags,
      ]);
    }





}
