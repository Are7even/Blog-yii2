<?php use yii\helpers\Url; ?>

<li>
    <a href="<?php echo Url::toRoute(['site/category','id'=>$model->id]) ?>"><?= $model->title?></a>
    <span class="post-count pull-right"> (<?= $model->getArticlesCount();?>)</span>
</li>
