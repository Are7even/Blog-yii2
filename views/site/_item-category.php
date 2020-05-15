<?php

use yii\helpers\Url;

?>
<article class="post post-list">
    <div class="row">
        <div class="col-md-6">
            <div class="post-thumb">
                <a href="<?= Url::toRoute(['/site/view','id'=>$model->id])?>"><img src="<?= $model->getImage();?>" alt="" class="pull-left"></a>

                <a href="<?= Url::toRoute(['/site/view','id'=>$model->id])?>" class="post-thumb-overlay text-center">
                    <div class="text-uppercase text-center">View Post</div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="post-content">
                <header class="entry-header text-uppercase">
                    <h6><a href="<?php echo Url::toRoute(['site/category','id'=>$model->category->id]) ?>"><?= $model->category->title?></a></h6>

                    <h1 class="entry-title"><a href="blog.html"><?php echo $model->title;?></a></h1>
                </header>
                <div class="entry-content">
                    <p>
                        <?= $model->content;?>
                    </p>
                </div>
                <div class="social-share">
                    <span class="social-share-title pull-left text-capitalize">By Rubel On <?= $model->getDate();?></span>

                </div>
            </div>
        </div>
    </div>
</article>
