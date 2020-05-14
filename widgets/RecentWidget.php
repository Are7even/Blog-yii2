<?php


namespace app\widgets;


use app\models\Article;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class RecentWidget extends Widget
{

    public function run()
    {

        $recent = new ActiveDataProvider([
            'query' => Article::find()->orderBy('date DESC')->limit(4),
            'pagination' => false,
        ]);

        return $this->render('list-view-recent',['recent'=>$recent]);
    }

}