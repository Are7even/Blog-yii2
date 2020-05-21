<div class="bottom-comment"><!--bottom comment-->

    <div class="comment-img">
        <img class="img-circle" src="<?php echo $model->user->photo ?>" alt="">
    </div>

    <div class="comment-text">
        <a href="#" class="replay btn pull-right"> Replay</a>
        <h5><?php echo $model->user->name ?></h5>

        <p class="comment-date">
            <?php echo $model->getDate(); ?>
        </p>


        <p class="para"><?php echo $model->text?></p>
    </div>
</div>
