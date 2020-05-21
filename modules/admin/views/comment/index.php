<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php if (!empty($comments)): ?>

    <table class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Author</td>
            <td>Text</td>
            <td>Action</td>
        </tr>
        </thead>


        
        <tbody>
        <?php foreach ($comments as $comment): ?>
            <tr>
                <td><?php echo $comment->id;?></td>
                <td><?php echo $comment->user->name;?></td>
                <td><?php echo $comment->text;?></td>
                <td>
                    <?php if ($comment->status===0):?>
                        <a href="<?php echo Url::toRoute(['comment/allow','id'=>$comment->id]) ?>" class="btn btn-success">Allow</a>
                    <?php else:?>
                        <a href="<?php echo Url::toRoute(['comment/disallow','id'=>$comment->id]) ?>" class="btn btn-warning">Disallow</a>
                    <?php endif;?>
                    <a href="<?php echo Url::toRoute(['comment/delete','id'=>$comment->id]) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>





    <?php endif; ?>

</div>

