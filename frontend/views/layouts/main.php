<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php 
$web = Yii::getAlias('@web'); 
$menu_items = ['Головна', 'Про адвоката', 'Консультація онлайн', 'Контакти'];
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Page Description and Author -->
        <meta name="description" content="Послуги адвоката в м. Черкаси. Услуги адвоката в г. Черкассы.">
        <meta name="author" content="Федорчук І.А.">

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <!-- Container -->
        <div id="container">

            <!-- Start Header -->
            <div class="hidden-header"></div>
            <header class="clearfix">

                <!-- Start Top Bar -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Start Contact Info -->
                                <ul class="contact-details">
                                    <li>
                                        <a href="#"><span class="head-icon glyphicon glyphicon-globe" aria-hidden="true"></span> бул. Шевченка 123, м. Черкаси</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="head-icon glyphicon glyphicon-envelope" aria-hidden="true"></span> advokat-fedorchuk@e-mail.ua</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="head-iconw glyphicon glyphicon-earphone" aria-hidden="true"></span> +38 063 464 54 54</a>
                                    </li>
                                </ul>
                                <!-- End Contact Info -->
                            </div>
                            <div class="col-md-6">
                                
                                <?=
                                Html::a('Рус', ['/site/login'], $options = [
                                    'class' => 'lang',
                                    'title' => 'Выбрать русский язык',
                                    'target' => '_self',
                                    'alt' => 'Русский язык',
                                ]) . 
                                Html::a('Укр', ['/site/login'], $options = [
                                    'class' => 'lang',
                                    'title' => 'Обрати укріїнську мову',
                                    'target' => '_self',
                                    'alt' => 'Українська мова',
                                ]);
                                ?>
                                
                                    <div class="login-block">
                                        <?php
                                        if (Yii::$app->user->isGuest) {
                                            echo Html::a('Реєстрація', ['/site/signup'], [
                                                'class' => 'login',
                                                'title' => 'Зареєструватись',
                                                'target' => '_self',
                                                'alt' => 'Реєстрація',
                                            ]);
                                            echo Html::a('Вхід', ['/site/login'], $options = [
                                                'class' => 'login',
                                                'title' => 'Увійти',
                                                'target' => '_self',
                                                'alt' => 'Вхід',
                                            ]);
                                        } else {
                                            echo Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                    'Вийти (' . Yii::$app->user->identity->username . ')',
                                                    ['class' => 'login']
                                            )
                                            . Html::endForm();
                                        }
                                        ?>
                                    </div>





                                <!-- Start Social Links -->
                                <!--                <ul class="social-list">
                                                    <li>
                                                        <a class="linkdin itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="lang">Укр</i></a>
                                                    </li>
                                                    <li>
                                                        <a class="google itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="lang">Рус</i></a>
                                                    </li>
                                                </ul>-->

                                <!-- End Social Links -->
                                <!--                <ul class="setup-login">-->

                                <!--                </ul>-->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Bar -->
                
<!--                <a class="navbar-brand" href="/advokat-fedorchuk/frontend/web/index.php" 
                   style="padding-top: 27px; padding-bottom: 27px;">My Company</a>


<a class="navbar-brand" href="index.html">
                                <span class="logo">
                                    <span class="logo-part1">Адвокат</span>
                                    <span class="logo-part2">Федорчук Оксана</span>
                                </span>
                            </a>


-->

                   
                   
                   
                <?php
                
                
               
                
                
                NavBar::begin(
                        [
                    'options' => [
                        'class' => 'navbar navbar-default navbar-top',
                    ],
                ]
                        );
                
                echo Html::a(Html::tag('span',
                    Html::tag('span', 'Адвокат', ['class' => 'logo-part1']) . ' ' .
                    Html::tag('span', 'Федорчук Оксана', ['class' => 'logo-part2']), ['class' => 'logo']), 
                    Yii::$app->homeUrl, $options = ['class' => 'navbar-brand']);
                
                
                $menuItems = [
                    ['label' => $menu_items[0], 'url' => ['/site/index']],
                    ['label' => $menu_items[1], 'url' => ['/site/about']],
                    ['label' => $menu_items[2], 'url' => ['/site/contact']],
                    ['label' => $menu_items[3], 'url' => ['/site/contact_']],
                ];
                ?>
                <div class="navbar-collapse collapse">
                    <?php
                    echo Nav::widget([
                        'options' => ['class' => 'nav navbar-nav navbar-right'],
                        'items' => $menuItems,
                    ]);
                    ?>
                </div>
                
                <!--      Mobile Menu Start -->
                <?php
                $menuItems_m = [
                    ['label' => $menu_items[0], 'url' => ['/site/index']],
                    ['label' => $menu_items[1], 'url' => ['/site/about']],
                    ['label' => $menu_items[2], 'url' => ['/site/contact']],
                    ['label' => $menu_items[3], 'url' => ['/site/contact_']],
                ];
                echo Nav::widget([
                    'options' => ['class' => 'wpb-mobile-menu'],
                    'items' => $menuItems_m,
                ]);
                ?>
                <!--         Mobile Menu End -->
                <?php NavBar::end(); ?>
                

                <!--      Mobile Menu Start -->
                <!--        <ul class="wpb-mobile-menu">
                          <li>
                            <a href="index.html">Home</a>
                          </li>
                          <li>
                            <a href="about.html">Pages</a>
                          </li>
                          <li>
                            <a href="portfolio-3.html">Portfolio</a>
                          </li>
                          <li>
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown">
                              <li><a href="blog.html">Blog - right Sidebar</a>
                              </li>
                              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                              </li>
                              <li><a href="single-post.html">Blog Single Post</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a class="active" href="contact.html">Контакти</a>
                          </li>
                        </ul>-->
                <!--         Mobile Menu End -->

               


                <!-- Start Header ( Logo & Naviagtion ) -->
                <!--      <div class="navbar navbar-default navbar-top">
                        <div class="container">
                          <div class="navbar-header">
                             Stat Toggle Nav Link For Mobiles 
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <i class="fa fa-bars"></i>
                            </button>
                             End Toggle Nav Link For Mobiles 
                            <a class="navbar-brand" href="index.html">
                                <span class="logo">
                                    <span class="logo-part1">Адвокат</span>
                                    <span class="logo-part2">Федорчук Оксана</span>
                                </span>
                            </a>
                          </div>
                          <div class="navbar-collapse collapse">
                             Start Navigation List 
                            <ul class="nav navbar-nav navbar-right">
                              <li>
                                <a href="index.html">Головна</a>
                              </li>
                              <li>
                                <a href="about.html">Про мене</a>
                              </li>
                              <li>
                                <a href="blog.html">Онлайн консультація</a>
                                <ul class="dropdown">
                                  <li><a href="blog.html">Blog - right Sidebar</a></li>
                                  <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                                  <li><a href="single-post.html">Blog Single Post</a></li>
                                </ul>
                              </li>
                              <li><a class="active" href="contact.html">Контакти</a></li>
                            </ul>
                             End Navigation List 
                          </div>
                        </div>
                
                         Mobile Menu Start 
                        <ul class="wpb-mobile-menu">
                          <li>
                            <a href="index.html">Home</a>
                          </li>
                          <li>
                            <a href="about.html">Pages</a>
                          </li>
                          <li>
                            <a href="portfolio-3.html">Portfolio</a>
                          </li>
                          <li>
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown">
                              <li><a href="blog.html">Blog - right Sidebar</a>
                              </li>
                              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                              </li>
                              <li><a href="single-post.html">Blog Single Post</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a class="active" href="contact.html">Контакти</a>
                          </li>
                        </ul>
                         Mobile Menu End 
                
                      </div>-->
                <!-- End Header ( Logo & Naviagtion ) -->

            </header>
            <!-- End Header -->



            <?= $content ?>




            <!-- Start Footer -->
            <footer>
                <div class="container">
                    <div class="row footer-widgets">

                        <!-- Start Subscribe & Social Links Widget -->
                        <div class="col-md-3">
                            <div class="footer-widget mail-subscribe-widget">
                                <h4>Get in touch<span class="head-line"></span></h4>
                                <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                                <form class="subscribe">
                                    <input type="text" placeholder="mail@example.com">
                                    <input type="submit" class="btn-system" value="Send">
                                </form>
                            </div>
                            <div class="footer-widget social-widget">
                                <h4>Follow Us<span class="head-line"></span></h4>
                                <ul class="social-icons">
                                    <li>
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li>
                                        <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                    </li>
                                    <li>
                                        <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-3 -->
                        <!-- End Subscribe & Social Links Widget -->


                        <!-- Start Twitter Widget -->
                        <div class="col-md-3">
                            <div class="footer-widget twitter-widget">
                                <h4>Twitter Feed<span class="head-line"></span></h4>
                                <ul>
                                    <li>
                                        <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                                        <span>28 February 2014</span>
                                    </li>
                                    <li>
                                        <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                                        <span>26 February 2014</span>
                                    </li>
                                    <li>
                                        <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                                        <span>28 February 2014</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-3 -->
                        <!-- End Twitter Widget -->


                        <!-- Start Flickr Widget -->
                        <div class="col-md-3">
                            <div class="footer-widget flickr-widget">
                                <h4>Flicker Feed<span class="head-line"></span></h4>
                                <ul class="flickr-list">
                                    <li>
                                        <a href="images/flickr-01.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-01.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-02.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-02.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-03.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-03.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-04.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-04.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-05.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-05.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-06.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-06.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-07.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-07.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-08.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-08.jpg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/flickr-09.jpg" class="lightbox">
                                            <img alt="" src="<?= $web ?>/images/flickr-09.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-3 --> 
                        <!-- End Flickr Widget -->


                        <!-- Start Contact Widget -->
                        <div class="col-md-3">
                            <div class="footer-widget contact-widget">
                                <h4><img src="<?= $web ?>/images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                                <ul>
                                    <li><span>Phone Number:</span> +01 234 567 890</li>
                                    <li><span>Email:</span> company@company.com</li>
                                    <li><span>Website:</span> www.yourdomain.com</li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-3 -->
                        <!-- End Contact Widget -->


                    </div>
                    <!-- .row -->

                    <!-- Start Copyright -->
                    <div class="copyright-section">
                        <div class="row">
                            <div class="col-md-6">
                                <p>&copy; 2014 Margo - All Rights Reserved</p>
                            </div>
                            <div class="col-md-6">
                                <ul class="footer-nav">
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Copyright -->

                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Container -->

        <!-- Go To Top Link -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


<!--  <script type="text/javascript" src="js/script.js"></script>-->

        <script type="text/javascript">
            //Contact Form

            $('#submit').click(function () {

                $.post("php/send.php", $(".contact-form").serialize(), function (response) {
                    $('#success').html(response);
                });
                return false;

            });
        </script>





        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

