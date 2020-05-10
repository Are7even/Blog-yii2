<?php

use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">



                <?=
                ListView::widget([
                    'dataProvider' => $listDataProvider,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'list-wrapper',
                        'id' => 'list-wrapper',
                    ],
                    'layout' => "{items}\n{pager}",
                    'itemView' => '_item',
                ]);
                ?>
                


            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="/public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                        <div class="popular-post">

                            <a href="#" class="popular-img"><img src="/public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="/public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Food & Drinks</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Travel</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Business</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Story</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">DIY & Tips</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
<!--footer start-->
