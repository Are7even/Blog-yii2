<?php


namespace app\widgets;



use app\models\Category;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class CategoryWidget extends Widget
{

    public function run(){

        $category = new ActiveDataProvider([
            'query' => Category::find(),
            'pagination' => false,
        ]);


        return $this->render('list-view-category',['category'=>$category]);
    }

}