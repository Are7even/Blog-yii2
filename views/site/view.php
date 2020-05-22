<?php

use app\widgets\CategoryWidget;
use app\widgets\CommentWidget;
use app\widgets\PopularWidget;
use app\widgets\RecentWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
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



                <?php echo CommentWidget::widget(['id'=>$articleModel->id]); ?>

                <!-- end bottom comment-->

<?php if (!Yii::$app->user->isGuest): ?>
                <div class="leave-comment"><!--leave comment-->
                    <h4>Leave a reply</h4>

                    <?php if (Yii::$app->session->getFlash('comment')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo Yii::$app->session->getFlash('comment');?>
                    </div>
                    <?php endif; ?>

                    <?php $form = ActiveForm::begin([
                        'action'=>['site/comment', 'id'=>$articleModel->id],
                        'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>

                        <div class="form-group">
                            <div class="col-md-12">
                                <?php echo $form->field($commentForm,'comment')->textarea(['class'=>'form-control','rows'=>6,'placeholder'=>'Write Massage'])->label(false) ?>
                            </div>
                        </div>
<!--                        <button type="submit" class="btn send-btn"></button>-->
                        <?php echo Html::submitButton('Post Comment', ['class' => 'btn send-btn']) ?>

                    <?php ActiveForm::end()?>
                </div><!--end leave comment-->
<?php endif;?>

            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <?php echo PopularWidget::widget(); ?>

                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <?php echo RecentWidget::widget() ;?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                         <?php echo CategoryWidget::widget(); ?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
