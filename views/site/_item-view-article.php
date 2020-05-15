<?php

use yii\helpers\Url;

?>
<article class="post">
    <div class="post-thumb">
        <a href="<?= Url::toRoute(['/site/view','id'=>$model->id])?>"><img src="<?= $model->getImage();?>" alt=""></a>
    </div>
    <div class="post-content">
        <header class="entry-header text-center text-uppercase">
            <h6><a href="<?php echo Url::toRoute(['site/category','id'=>$model->category->id]) ?>"><?= $model->category->title?></a></h6>

            <h1 class="entry-title"><?= $model->title;?></h1>


        </header>
        <div class="entry-content">
            <p>
                <?= $model->content;?>
            </p>
        </div>


        <?php if(is_array($model->tags)):?>
        <div class="decoration">
            <?php foreach ($model->tags as $tag):?>
            <a href="#" class="btn btn-default"><?= $tag->title?></a>
            <?php endforeach; ?>
        </div>
        <?php endif;?>
        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize"><?= $model->getDate();?></span>
            <ul class="text-center pull-right">
                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</article>
