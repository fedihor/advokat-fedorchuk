<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Про адвоката';
Yii::$app->view->params['pageDetails'] = '';
$web = yii\helpers\Url::to('@web');
?>
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">


            <div class="row">

                <div class="col-md-7">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Профайл Адвоката</span></h4>
                    <p>
                        Адвокат Федорчук Оксана Адамівна практикує індивідуальну адвокатську діяльність по:
                    <ul class="icons-list">
                        <li><i class="glyphicon glyphicon-ok-sign"></i> кримінальним справам;</li>
                        <li><i class="glyphicon glyphicon-ok-sign"></i> кримінально-виконавчому праву;</li>
                        <li><i class="glyphicon glyphicon-ok-sign"></i> спадковому праву;</li>
                        <li><i class="glyphicon glyphicon-ok-sign"></i> цивільним справам;</li>
                        <li><i class="glyphicon glyphicon-ok-sign"></i> адміністративним правопорушенням (в т.ч. порушення ПДР України, ДТП);</li>
                        <li><i class="glyphicon glyphicon-ok-sign"></i> сімейному праву.</li>
                    </ul>
                    </p>
                    <h3>
                        Здрастуйте, я юрипрудент Оксана, я ще не підготувала для цієї сторінки
                        свого резюме та повну, структуровану інформацію про мою професійну діяльність,
                        зате, я вже домовилась про рекламу цього сайту в Інтернеті!
                    </h3>
                </div>

                <div class="col-md-5">

                    <!-- Start Touch Slider -->
                    <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                        <div class="item"><img alt="" src="<?= $web ?>/images/about/dolph1.jpg"></div>
                        <div class="item"><img alt="" src="<?= $web ?>/images/about/dolph2.jpg"></div>
                        <div class="item"><img alt="" src="<?= $web ?>/images/about/dolph3.jpg"></div>
                    </div>
                    <!-- End Touch Slider -->

                </div>

            </div>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:50px;"></div>

            <div class="row">

                <div class="col-md-12">
                    

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Копії документів</span></h4>

                    <div class="post-head">
                        <a class="lightbox" title="This is an image titledddd" href="<?= $web ?>/images/about/svidadvok.png">
                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                            <img alt="" src="<?= $web ?>/images/about/svidadvok.png">
                        </a>
                    </div>


                </div>

            </div>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:50px;"></div>

            


        </div>
    </div>
</div>
<!-- End content -->




