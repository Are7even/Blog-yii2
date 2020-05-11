<div class="popular-post">


    <a href="#" class="popular-img"><img src="<?= $model->getImage();?>" alt="">

        <div class="p-overlay"></div>
    </a>

    <div class="p-content">
        <a href="#" class="text-uppercase"><?= $model->title?></a>
        <span class="p-date"><?= $model->getDate()?></span>

    </div>
</div>
