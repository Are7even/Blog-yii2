<?php

use app\widgets\CategoryWidget;
use app\widgets\PopularWidget;
use app\widgets\RecentWidget;
use yii\widgets\ListView;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

               <?php echo ListView::widget([
                'dataProvider' => $article,
                'options' => [
                'tag' => 'div',
                'class' => 'list-wrapper',
                'id' => 'list-wrapper',
                ],
                'layout' => "{items}\n{pager}",
                'itemView' => '_item-view-article',
                ]);
                ?>


<!--                <div class="top-comment">-->
<!--                    <img src="/public/images/comment.jpg" class="pull-left img-circle" alt="">-->
<!--                    <h4>Rubel Miah</h4>-->
<!---->
<!--                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy hello ro mod tempor-->
<!--                        invidunt ut labore et dolore magna aliquyam erat.</p>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="single-blog-box">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/blog-next.jpg" alt="">-->
<!---->
<!--                                <div class="overlay">-->
<!---->
<!--                                    <div class="promo-text">-->
<!--                                        <p><i class=" pull-left fa fa-angle-left"></i></p>-->
<!--                                        <h5>Rubel is doing Cherry theme</h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!---->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="single-blog-box">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/blog-next.jpg" alt="">-->
<!---->
<!--                                <div class="overlay">-->
<!--                                    <div class="promo-text">-->
<!--                                        <p><i class=" pull-right fa fa-angle-right"></i></p>-->
<!--                                        <h5>Rubel is doing Cherry theme</h5>-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="related-post-carousel">-->
<!--                    <div class="related-heading">-->
<!--                        <h4>You might also like</h4>-->
<!--                    </div>-->
<!--                    <div class="items">-->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/related-post-1.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/related-post-2.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/related-post-3.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/related-post-1.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/related-post-2.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/related-post-3.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="bottom-comment"><!--bottom comment-->
                    <h4>3 comments</h4>

                    <div class="comment-img">
                        <img class="img-circle" src="/public/images/comment-img.jpg" alt="">
                    </div>

                    <div class="comment-text">
                        <a href="#" class="replay btn pull-right"> Replay</a>
                        <h5>Rubel Miah</h5>

                        <p class="comment-date">
                            December, 02, 2015 at 5:57 PM
                        </p>


                        <p class="para">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. At vero eos et cusam et justo duo dolores et ea rebum.</p>
                    </div>
                </div>
                <!-- end bottom comment-->


                <div class="leave-comment"><!--leave comment-->
                    <h4>Leave a reply</h4>


                    <form class="form-horizontal contact-form" role="form" method="post" action="#">

                        <div class="form-group">
                            <div class="col-md-12">
										<textarea class="form-control" rows="6" name="message"
                                                  placeholder="Write Massage"></textarea>
                            </div>
                        </div>
                        <a href="#" class="btn send-btn">Post Comment</a>
                    </form>
                </div><!--end leave comment-->
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <?= PopularWidget::widget(); ?>

                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <?= RecentWidget::widget() ;?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                         <?= CategoryWidget::widget(); ?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
