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


                <?=
                ListView::widget([
                    'dataProvider' => $articles,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'list-wrapper',
                        'id' => 'list-wrapper',
                    ],
                    'layout' => "{items}\n{pager}",
                    'itemView' => '_item-category',
                ]);
                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <?php echo PopularWidget::widget() ?>

                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <?php echo RecentWidget::widget() ?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                       <?php echo CategoryWidget::widget(); ?>
                        </ul>
                    </aside>
<!--                    <aside class="widget pos-padding">-->
<!--                        <h3 class="widget-title text-uppercase text-center">Follow@Instagram</h3>-->
<!---->
<!--                        <div class="instragram-follow">-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!--                            <a href="#">-->
<!--                                <img src="/public/images/ins-flow.jpg" alt="">-->
<!--                            </a>-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </aside>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
