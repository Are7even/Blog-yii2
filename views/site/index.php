<?php

use app\widgets\CategoryWidget;
use app\widgets\RecentWidget;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use app\widgets\PopularWidget;

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

                        <?= PopularWidget::widget(); ?>

                    </aside>


                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                    <?= RecentWidget::widget() ;?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>

                            <?=
                            CategoryWidget::widget();
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
