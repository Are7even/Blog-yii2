<?php


namespace app\widgets;


use app\models\Article;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class PopularWidget extends Widget
{

    public function run(){

        $popular = new ActiveDataProvider([
            'query' => Article::find()->orderBy('viewed DESC')->limit(3),
            'pagination' => false,
        ]);

        return $this->render('list-view-popular',['popular'=>$popular]);
    }

}