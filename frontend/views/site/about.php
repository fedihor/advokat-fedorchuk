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
                        натомість, я вже домовилась про рекламу цього сайту в Інтернеті!
                    </h3>
                    
                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:30px;"></div>
                </div>

                <div class="col-md-5">

                    <!-- Start Touch Slider -->
                    <div class="touch-slider text-center" data-slider-navigation="true" data-slider-pagination="true">
                        <div class="item"><img alt="" src="<?= $web ?>/images/about/advoeatgrapes.jpg"></div>
                        <div class="item"><img alt="" src="<?= $web ?>/images/about/dolph2.jpg"></div>
                        <div class="item"><img alt="" src="<?= $web ?>/images/about/dolph3.jpg"></div>
                    </div>
                    <!-- End Touch Slider -->

                </div>

            </div>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:50px;"></div>

            <div id="full-screen-box" class="full-screen-box" onclick="document.querySelector('#full-screen-box').style.display = 'none'">
                <div id="full-picture-box" class="full-picture-box"></div>
            </div>

            <!-- Start Recent Projects Carousel -->
            <div class="recent-projects">
                <h4 class="title"><span>Копії документів</span></h4>
                <div class="projects-carousel touch-carousel">

                    <div class="portfolio-item item">
                        <div class="portfolio-border portfolio-background">
                            <div class="portfolio-thumb">
                                <a class="lightbox-own" title="Свідотство адвоката" onclick='expandDoc("<?= $web ?>/images/about/certificate.jpg", "Свідотство адвоката")'>
                                    <div class="thumb-overlay"><i class="glyphicon glyphicon-eye-open"></i></div>
                                    <img alt="Свідотство адвоката" src="<?= $web ?>/images/about/certificate.jpg">
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a class="portfolio-href" onclick='expandDoc("<?= $web ?>/images/about/certificate.jpg", "Свідотство адвоката")'>
                                    <h4>Свідотство</h4>
                                    <span>
                                        Про право на зайняття адвокатською діяльністю № 308
                                        від 13.10.2008 р.<br>
                                        Видано Черкаською обласною КДКА.<br>
                                        Рішення про видачу Cвідоцтва №&nbsp;57 від 13.10.2008 р.
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border portfolio-background">
                            <div class="portfolio-thumb">
                                <a class="lightbox-own" title="Свідотство про підвищення кваліфікації" onclick='expandDoc("<?= $web ?>/images/about/training_certificate.jpg", "Свідотство адвоката")'>
                                    <div class="thumb-overlay"><i class="glyphicon glyphicon-eye-open"></i></div>
                                    <img alt="" src="<?= $web ?>/images/about/training_certificate.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a class="portfolio-href" onclick='expandDoc("<?= $web ?>/images/about/training_certificate.jpg", "Свідотство про підвищення кваліфікації")'>
                                    <h4>Свідотство</h4>
                                    <span>Про підвищення кваліфікації адвокатом</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border portfolio-background">
                            <div class="portfolio-thumb">
                                <a class="lightbox-own" title="Диплом за успіхи в адвокатській діяльності" onclick='expandDoc("<?= $web ?>/images/about/diploma.jpg", "Диплом за успіхи в адвокатській діяльності")'>
                                    <div class="thumb-overlay"><i class="glyphicon glyphicon-eye-open"></i></div>
                                    <img alt="" src="<?= $web ?>/images/about/diploma.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a class="portfolio-href" onclick='expandDoc("<?= $web ?>/images/about/diploma.jpg", "Диплом за успіхи в адвокатській діяльності")'>
                                    <h4>Диплом</h4>
                                    <span>За успіхи в адвокатській діяльності</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Recent Projects Carousel -->
            
            
            
            
        </div>
    </div>
</div>
<!-- End content -->




