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
                    'dataProvider' => $articles,
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
                        <?=
                        ListView::widget([
                            'dataProvider' => $popular,
                            'options' => [
                                'tag' => 'div',
                                'class' => 'list-wrapper',
                                'id' => 'list-wrapper',
                            ],
                            'layout' => "{items}\n{pager}",
                            'itemView' => '_item-popular',
                        ]);
                        ?>
                    </aside>


                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <?=
                        ListView::widget([
                            'dataProvider' => $recent,
                            'options' => [
                                'tag' => 'div',
                                'class' => 'list-wrapper',
                                'id' => 'list-wrapper',
                            ],
                            'layout' => "{items}\n{pager}",
                            'itemView' => '_item-recent',
                        ]);
                        ?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>

                            <?=
                            ListView::widget([
                                'dataProvider' => $category,
                                'options' => [
                                    'tag' => 'div',
                                    'class' => 'list-wrapper',
                                    'id' => 'list-wrapper',
                                ],
                                'layout' => "{items}\n{pager}",
                                'itemView' => '_item-category',
                            ]);
                            ?>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
<!--footer start-->
