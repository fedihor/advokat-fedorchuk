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
        <div class="page-content">
            <div class="row">

                <div class="col-md-12">
                                        <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Юридична онлайн консультація</span></h4>
                    <br><br>
                    <!-- Some Text -->
                    <p class="text-center">
                        <img src="<?= $web ?>/images/devpage.jpg">
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End content -->




