<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Консультація онлайн';
Yii::$app->view->params['pageDetails'] = '';
$web = yii\helpers\Url::to('@web');
?>
<!-- Start Content -->

<div id="content">
    <div class="container">
        <div class="row blog-post-page">

            <!-- Start Blog Posts -->
            <div class="col-md-9 blog-box">

                <?php if (!empty($postList)): ?>
                    <?php foreach ($postList as $post): ?>
                        
                        <!-- Start Post -->
                        <div class="blog-post standard-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-type"><i class="glyphicon glyphicon-question-sign"></i></div>
                                <h2>
                                    <a class="post-preview-title" href="<?= \yii\helpers\Url::to(['consult/post', 'id' => $post->id]) ?>">
                                        <?= $post->title ?>
                                    </a>
                                </h2>
                                <ul class="post-meta">
                                    <li>№ <?= $post->id ?></li>
                                    <li><?= Yii::$app->formatter->asDate($post->date_post, 'php:d.m.Y H:m'); ?></li>
                                    <li><a href="#">3 додатки</a></li>
                                    <li><a href="#">2 доповнення</a></li>
                                    <li><a href="#">3 відповіді</a></li>
                                </ul>
                                <p>
                                    <?php
                                    $previewPost = strip_tags($post->post);
                                    $previewPost = substr($previewPost, 0, 500);
                                    $previewPost = rtrim($previewPost, '!?.,:;');
                                    $previewPost = substr($previewPost, 0, strrpos($previewPost, ' '));
                                    echo $previewPost." … ";
                                    ?>
                                </p>
                                <a class="red-stripe-button" href="<?= \yii\helpers\Url::to(['consult/post', 'id' => $post->id]) ?>">Переглянути</a>
                            </div>
                        </div>
                        <!-- End Post -->

                    <?php endforeach; ?>
                    <!-- Start Pagination -->
                    <div class="text-center">
                    <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
                    </div>
                    <!-- End Pagination -->
                <?php endif; ?>

            </div>
            <!-- End Blog Posts -->

            <!-- Sidebar -->
            <div class="col-md-3 sidebar right-sidebar">

                <!-- Categories Widget -->
                <div class="widget widget-categories">
                    <h4>Доступні дії <span class="head-line"></span></h4>
                    <ul>
                        <li>
                            <a href="#">Додати файл</a>
                        </li>
                        <li>
                            <a href="#">Доповнити питання</a>
                        </li>
                        <li>
                            <a href="#">Додати нове питання</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End sidebar-->
        </div>
    </div>
</div>







<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">
            <div class="row">

                <div class="col-md-12">
                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Юридична онлайн консультація</span></h4>
                    <br>
                    <p class="text-center">
                        <img src="<?= $web ?>/images/devpage.jpg">
                    </p>






                </div>
            </div>
        </div>
    </div>
</div>
<!-- End content -->




