
<article class="post">
    <div class="post-thumb">
        <a href="blog.html"><img src="<?= $model->getImage();?>" alt=""></a>

        <a href="blog.html" class="post-thumb-overlay text-center">
            <div class="text-uppercase text-center">View Post</div>
        </a>
    </div>
    <div class="post-content">
        <header class="entry-header text-center text-uppercase">
            <h6><a href="#"><?= $model->category->title;?></a></h6>

            <h1 class="entry-title"><a href="blog.html"><?php echo $model->title?></a></h1>


        </header>
        <div class="entry-content">
            <p>
                <?=  $model->description?>
            </p>

            <div class="btn-continue-reading text-center text-uppercase">
                <a href="blog.html" class="more-link">Continue Reading</a>
            </div>
        </div>
        <div class="social-share">
            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> <?= $model->date?></span>
            <ul class="text-center pull-right">
                <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= (int) $model->viewed?>
            </ul>
        </div>
    </div>
</article>