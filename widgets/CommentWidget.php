<?php


namespace app\widgets;


use app\models\Comment;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class CommentWidget extends Widget
{
    public $statusActive = 1;
    public $id;

    public function run(){

        $comments = new ActiveDataProvider([
            'query' => Comment::find()->where(['article_id'=>$this->id])->andWhere(['status'=>$this->statusActive]),
            'pagination' => [
                'pageSize' => false,
            ],
        ]);

        return $this->render('list-view-comment',['comments'=>$comments]);
    }

}