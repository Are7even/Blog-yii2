<?php

use yii\helpers\Url;

?>
<div class="thumb-latest-posts">


    <div class="media">
        <div class="media-left">
            <a href="<?= Url::toRoute(['/site/view','id'=>$model->id])?>" class="popular-img"><img src="<?= $model->getImage();?>" alt="">
                <div class="p-overlay"></div>
            </a>
        </div>
        <div class="p-content">
            <a href="<?= Url::toRoute(['/site/view','id'=>$model->id])?>" class="text-uppercase"><?= $model->title?></a>
            <span class="p-date"><?= $model->getDate()?></span>
        </div>
    </div>
</div>
