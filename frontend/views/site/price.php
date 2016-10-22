<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Ціни';
Yii::$app->view->params['pageDetails'] = '';
$web = yii\helpers\Url::to('@web');
?>
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">


            <div class="row">

                <!-- Start Big Heading -->
                <div class="big-title text-center">
                    <h1>
                        <span class="accent-color">Гонорар</span> адвоката, порядок оплати послуг адвоката, <span class="accent-color">реквізити</span>
                    </h1>
                </div>
                <!-- End Big Heading -->

                <!-- Divider -->
                <div class="hr1" style="margin-top:20px; margin-bottom:20px;"></div>

                <!-- Start Service Icon 1 -->
                <div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-paperclip icon-mini-effect icon-effect-3 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Середня вартість юридичної консультації</h4>
                        <p>в т.ч. онлайн консультації становить 
                            <span class="accent-color">100,00&nbsp;-&nbsp;200,00 грн.</span>
                        </p>
                    </div>
                </div>
                <!-- End Service Icon 1 -->

                <!-- Start Service Icon 2 -->
                <div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-pushpin icon-mini-effect icon-effect-3 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Вартість онлайн консультації</h4>
                        <p>
                            становить <span class="accent-color">100,00 грн. і вище</span> та залежить від складності Вашого питання.
                        </p>
                    </div>
                </div>
                <!-- End Service Icon 2 -->

                <!-- Start Service Icon 3 -->
                <div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-paperclip icon-mini-effect icon-effect-3 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Вартість процесуальних документів</h4>
                        <p>
                            (позовної заяви, заяви в окремому провадженні, апеляційної скарги, касаційної скарги, 
                            апеляції, касації, заперечення та ін.) становить <span class="accent-color">400,00 грн. та вище</span>.
                        </p>
                    </div>
                </div>
                <!-- End Service Icon 3 -->

                <!-- Start Service Icon 4 -->
                <div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-pushpin icon-mini-effect icon-effect-6 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Середня вартість складання документу</h4>
                        <p>становить <span class="accent-color">400,00&nbsp;-&nbsp;1000,00 грн.</span></p>
                    </div>
                </div>
                <!-- End Service Icon 4 -->

                <!-- Start Service Icon 5 -->
                <div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-paperclip icon-mini-effect icon-effect-5 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Вартість позовної заяви про стягнення аліментів</h4>
                        <p>
                            (на неповнолітню дитину, на повнолітню дитину, що продовжує навчання, 
                            на одного з подружжя та непрацездатних батьків) та позовної заяви про 
                            розірвання шлюбу становить <span class="accent-color">150,00&nbsp;-&nbsp;250,00 грн.</span>
                        </p>
                    </div>
                </div>
                <!-- End Service Icon 5 -->

                <!-- Start Service Icon 6 -->
                <div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-pushpin icon-mini-effect icon-effect-4 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Вартість адвокатського запиту</h4>
                        <p>складає <span class="accent-color">300,00 грн.</span></p>
                    </div>
                </div>
                <!-- End Service Icon 6 -->

            </div>
            <div class="row">

                <!-- Start Service Icon 7 -->
                <div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-paperclip icon-mini-effect icon-effect-3 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Гонорар адвоката за представництво інтересів в суді,</h4>
                        <p>
                            на досудовому слідстві та в інших інстанціях встановлюється за 
                            домовленістю між адвокатом та клієнтом в залежності від 
                            конкретних обставин справи.
                        </p>
                    </div>
                </div>
                <!-- End Service Icon 7 -->

            </div>

            <div class="row">

                <div class="col-md-12">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Реквізити для оплати консультації (в т.ч. онлайн)</span></h4>

                    <!-- Some Text -->
                    <p>Або не писати, а повідомляти кожному окрем.</p>
                    <p>Отримати картку <span class="glyphicon glyphicon-credit-card"></span></p>

                </div>
                
            </div>

        </div>
    </div>
</div>
<!-- End content -->
