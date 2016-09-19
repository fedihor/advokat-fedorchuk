<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Головна';
Yii::$app->view->params['pageDetails'] = '';
$web = yii\helpers\Url::to('@web');
?>

<!-- Start HomePage Slider -->

<section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="<?= $web ?>/images/slider/bg1.jpg" alt="Кабінет адвоката">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated2">
                            <span><strong>Кабінет</strong> адвоката</span>
                        </h2>
                        <h3 class="animated3 white"><span>Федорчук Оксани Адамівни</span></h3>
                        <p class="animated4">
                            <?= Html::a('Про адвоката', ['/site/about'], $options = ['class' => 'slider btn btn-system btn-large']) ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="<?= $web ?>/images/slider/bg2.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated4 white">
                            <span><strong>Юридична</strong> консультація</span>
                        </h2>
                        <h3 class="animated5 white">
                            <span>Консультація адвоката та захист в суді</span>
                        </h3>
                        <p class="animated6">
                            <?= Html::a('Ціни', ['/site/price'], $options = ['class' => 'slider btn btn-system btn-large']) ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="<?= $web ?>/images/slider/bg3.jpg" alt="Консультація адвоката онлайн">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated7 white">
                            <span>Консультація адвоката <strong>онлайн</strong></span>
                        </h2>
                        <h3 class="animated8 white">
                            <span> </span>
                        </h3>
                        <div class="">
                            <?= Html::a('Консультація онлайн', ['/site/consult'], $options = ['class' => 'animated4 slider btn btn-default btn-min-block']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="glyphicon glyphicon-menu-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="glyphicon glyphicon-menu-right"></i></span>
        </a>
    </div>
    <!-- /carousel -->
</section>
<!-- End HomePage Slider -->


<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row sidebar-page">


            <!-- Page Content -->
            <div class="col-md-9 page-content">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Вітаю вас на нашому сайті</span></h4>

                <!-- Some Text -->
                <p>
                    На цьому сайті Ви можете отримати юридичну консультацію від адвоката в онлайн режимі,
                    або зателефонувати по вищевказаному номеру телефону і безпосередньо зв’язатись з адвокатом для 
                    телефонної розмови або для зустрічі.
                </p>
                <p>
                    Форма юридичної консультації (усна, письмова, онлайн-консультація) залежить від складності Вашого питання.
                    Під час онлайн-консультації адвокат ознайомлюється з Вашим питанням протягом незначного проміжку часу та
                    повідомляє Вам про суму оплати саме Вашої юридичної консультації
                    (середня вартість онлайн-консультації становить від 100 до 200 грн.).
                </p>
                <p>
                    Час, який надається адвокату для Вашої консультації залежить від складності питання,
                    але не перевищує 24-х годин з моменту поставленого перед адвокатом питання (за умови попередньої оплати).
                    При необхідності отримання адвокатом від Вас всіх необхідних документів або будь-якої іншої інформації, 
                    що стосується Вашого питання – відповідь на Ваше питання буде сформована протягом 24-х годин
                    з моменту надання Вами фотокопій необхідних документів або іншої необхідної інформації.
                </p>
                <p>
                    Консультація надається Вам з посиланням на норми (статті) закону та/або на судову практику.
                </p>

                <!-- Divider -->
                <div class="hr5" style="margin-top:30px; margin-bottom:45px;"></div>

                <!-- Accordion -->
                <div class="panel-group" id="accordion">

                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-desktop"></i> Fully Responsive Theme
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-4" class="panel-collapse collapse in">
                            <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:180px;" alt="" src="images/bussniss-pic.jpg" /> <strong class="accent-color">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <strong>printer</strong> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</div>
                        </div>
                    </div>
                    <!-- End Accordion 3 -->

                    <!-- Start Accordion 2 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-5" class="collapsed">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-gift"></i> Touchable Slider
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-5" class="panel-collapse collapse">
                            <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                        </div>
                    </div>
                    <!-- End Accordion 3 -->

                    <!-- Start Accordion 3 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-6" class="collapsed">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-tint"></i> Retina Ready
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-6" class="panel-collapse collapse">
                            <div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                        </div>
                    </div>
                    <!-- End Accordion 3 -->

                </div>
                <!-- End Accordion -->

            </div>
            <!-- End Page Content-->


            <!--Sidebar-->
            <div class="col-md-3 sidebar right-sidebar">

                <!-- Popular Posts widget -->
                <div class="widget widget-popular-posts">
                    <h4>Ось потрібні сайти<br>для мого сайту <span class="head-line"></span></h4>
                    <ul>
                        <li>
                            <div class="widget-thumb">
                                <a href="http://www.scourt.gov.ua/" target="_blank">
                                    <img src="<?= $web ?>/images/links/vsu.png" alt="Верховний Суд України" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="http://www.scourt.gov.ua/" target="_blank">Верховний<br>Суд<br>України</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="http://www.sc.gov.ua/" target="_blank">
                                    <img src="<?= $web ?>/images/links/vvsu.gif" alt="Вищий спецiалiзований суд України" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="http://www.sc.gov.ua/" target="_blank">Вищий спецiалiзований суд України з розгляду цивiльних i кримiнальних справ</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="http://unba.org.ua/" target="_blank">
                                    <img src="<?= $web ?>/images/links/unba.png" alt="Національна асоціація адвокатів України" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="http://unba.org.ua/" target="_blank">Національна асоціація адвокатів України</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="https://minjust.gov.ua/ua" target="_blank">
                                    <img src="<?= $web ?>/images/links/muu.png" alt="Міністерство юстиції України" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="https://minjust.gov.ua/ua" target="_blank">Міністерство<br>юстиції<br>України</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="https://kap.minjust.gov.ua/login/index/" target="_blank">
                                    <img src="<?= $web ?>/images/links/kap.png" alt="Кабінет електронних сервісів" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="https://kap.minjust.gov.ua/login/index/" target="_blank">Кабінет електронних сервісів Міністерства юстиції України</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="http://www.reyestr.court.gov.ua/" target="_blank">
                                    <img src="<?= $web ?>/images/links/reyestr.png" alt="Єдиний державний реєстр судових рішень" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="http://www.reyestr.court.gov.ua/" target="_blank">Єдиний державний реєстр судових рішень</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="https://trade.informjust.ua/vpdoc/getdoc.aspx" target="_blank">
                                    <img src="<?= $web ?>/images/links/informjust.jpg" alt="Єдиний державний реєстр виконавчих проваджень" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="https://trade.informjust.ua/vpdoc/getdoc.aspx" target="_blank">Єдиний державний реєстр виконавчих проваджень</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="http://www.ccu.gov.ua/" target="_blank">
                                    <img src="<?= $web ?>/images/links/ccu.png" alt="Конституційний Суд України" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="http://www.ccu.gov.ua/" target="_blank">Конституційний<br>Суд<br>України</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="http://vkdka.org/" target="_blank">
                                    <img src="<?= $web ?>/images/links/vkdka.png" alt="Вища кваліфікаційно-дисциплінарна комісія адвокатури" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="http://vkdka.org/" target="_blank">Вища кваліфікаційно-дисциплінарна комісія адвокатури</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="http://cay.org.ua/" target="_blank">
                                    <img src="<?= $web ?>/images/links/cau.png" alt="Спілка адвокатів України" />
                                </a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="http://cay.org.ua/" target="_blank">Спілка<br>адвокатів<br>України</a></h5>
                            </div>
                            <div class="clearfix"></div>
                        </li>

                    </ul>
                </div>

            </div>
            <!--End sidebar-->


        </div>
    </div>
</div>
<!-- End Content -->
