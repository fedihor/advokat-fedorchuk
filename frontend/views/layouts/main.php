<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php 
$web = yii\helpers\Url::to('@web');
//$menu_items = ['Головна', 'Про адвоката', 'Консультація онлайн', 'Контакти'];
$menu_items = array(
    array('Головна', '/site/index'),
    array('Про адвоката', '/site/about'),
    array('Ціни', '/site/price'),
    array('Консультація онлайн', '/consult/index'),
    array('Контакти', '/site/contact'),
);
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
        <script src="<?= $web.'/js/ownscript.js' ?>" type="text/javascript"></script>


        
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
                <div class="top-bar" id="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- Start Contact Info -->
                                <ul class="contact-details">
                                    <li>
                                        <?= Html::a(Html::tag('span', '', 
                                                $options = ['class' => 'head-icon glyphicon glyphicon-globe', 'aria-hidden' => 'true']).
                                                ' бул. Шевченка 194, м. Черкаси', ['/site/contact']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a(Html::tag('span', '', 
                                                $options = ['class' => 'head-icon glyphicon glyphicon-envelope', 'aria-hidden' => 'true']).
                                                ' advokat-fedorchuk@e-mail.ua', 'mailto:advokat-fedorchuk@e-mail.ua') ?>
                                    </li>
                                    <li>
                                        <?= Html::a(Html::tag('span', '', 
                                                $options = ['class' => 'head-iconw glyphicon glyphicon-earphone', 'aria-hidden' => 'true']).
                                                '  +38 063 464 54 54', ['/site/contact']) ?>
                                    </li>
                                </ul>
                                <!-- End Contact Info -->
                            </div>
                            <div class="col-md-5">
                                
                                <?=
                                Html::a('Рус', ['/site/login'], $options = [
                                    'class' => 'lang',
                                    'title' => 'Выбрать русский язык',
                                    'target' => '_self',
                                    'alt' => 'Русский язык',
                                ]) . 
                                Html::a('Укр', ['/site/login'], $options = [
                                    'class' => 'lang active',
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Bar -->
                <?php
                NavBar::begin(['options' => ['class' => 'navbar navbar-default navbar-top']]);
                
                echo Html::a(Html::tag('span',
                    Html::tag('span', 'Адвокат', ['class' => 'logo-part1']) . ' ' .
                    Html::tag('span', 'Федорчук', ['class' => 'logo-part2']) . ' ' .
                    Html::tag('span', 'Оксана', ['class' => 'logo-part3']), ['class' => 'logo']), 
                    Yii::$app->homeUrl, $options = ['class' => 'navbar-brand']);
                
                $menuItems = [
                    ['label' => $menu_items[0][0], 'url' => [$menu_items[0][1]]],
                    ['label' => $menu_items[1][0], 'url' => [$menu_items[1][1]]],
                    ['label' => $menu_items[2][0], 'url' => [$menu_items[2][1]]],
                    ['label' => $menu_items[3][0], 'url' => [$menu_items[3][1]], 'options' => ['id' => 'consult-menu-item']],
                    ['label' => $menu_items[4][0], 'url' => [$menu_items[4][1]]],
                    
                    /*['label' => 'Products', 'url' => ['product/index'], 'items' => [
                        ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
                        ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
                    ]],*/
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
                
                <!--Mobile Menu Start -->
                <?php
                $menuItems_m = [
                    ['label' => $menu_items[0][0], 'url' => [$menu_items[0][1]]],
                    ['label' => $menu_items[1][0], 'url' => [$menu_items[1][1]]],
                    ['label' => $menu_items[2][0], 'url' => [$menu_items[2][1]]],
                    ['label' => $menu_items[3][0], 'url' => [$menu_items[3][1]], 'options' => ['id' => 'consult-mobile-menu-item']],
                    ['label' => $menu_items[4][0], 'url' => [$menu_items[4][1]]],
                ];
                echo Nav::widget([
                    'options' => ['class' => 'wpb-mobile-menu'],
                    'items' => $menuItems_m,
                ]);
                ?>
                <!--         Mobile Menu End -->
                
                <?php NavBar::end(); ?>
              
            </header>
            <!-- End Header -->
            
            <?php if(Yii::$app->controller->action->id != 'contact' && Yii::$app->controller->action->id != 'index')
            {
                $homeUrl = Yii::$app->homeUrl;
                if($this->params['pageDetails'] != '')
                {
                    $pageDetails = '<p>'.$this->params['pageDetails'].'</p>';
                    $pageBannerClass = 'page-banner';
                }
                else
                {
                    $pageDetails = '';
                    $pageBannerClass = 'page-banner no-subtitle';
                }
                if(!empty($this->params['crumb'])) {
                    $crumb = $this->params['crumb'].'';
                } else {
                    $crumb = '';
                }
                
echo <<<HERE
            <!-- Start Page Banner -->
            <div class="$pageBannerClass" style="padding:40px 0; background: url($web/images/slide-02-bg.jpg) center #f9f9f9;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>$this->title</h2>
                                $pageDetails
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcrumbs">
                                <li><a href="$homeUrl">Головна</a></li>
                                $crumb
                                <li>$this->title</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- End Page Banner -->
HERE;
                Alert::widget();
            }
            ?>
            <div id="page-wrap">               
                <?= $content ?>
            </div>
            <!-- Start Footer -->
            <footer id="footer">
                <div class="container">

                    <!-- .row -->

                    <!-- Start Copyright -->
                    <div class="copyright-section">
                        <div class="row">
                            <div class="col-md-6">
                                <p>&copy; <?= date('Y') ?> Сайт адвоката Федорчук О.А. - всі права застережено</p>
                            </div>
                            <div class="col-md-6 copyright-right-section">
                                <p>Розробник сайту <a href="mailto:fihor@mail.ua">Федорчук І.А.</a></p>
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
        <a href="#" class="back-to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
        
        <script type="text/javascript">
            $('#submit').click(function () {

                $.post("php/send.php", $(".contact-form").serialize(), function (response) {
                    $('#success').html(response);
                });
                return false;

            });            
        </script>
        <script type="text/javascript">   
            setMinHeightForPageWrap();
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>