<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AskPost */

$this->title = 'Створення запиту';
Yii::$app->view->params['pageDetails'] = 'Задайте питання адвокату';
Yii::$app->view->params['crumb'] = '<li>' . Html::a('Консультація онлайн', ['/consult/index']) . '</li>';
$web = yii\helpers\Url::to('@web');
?>

<script type="text/javascript">
    activateMenuItem('consult-menu-item', 'consult-mobile-menu-item');
</script>

<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">
            <div class="row">

                <div class="col-md-12">

                    <!-- Start Big Heading -->
                    <div class="big-title text-center">
                        <h2>Заповніть форму запиту</strong> і натисніть <strong>Зберегти</strong></h2>
                        <p class="title-desc">За необхідністю прикріпіть документи</p>
                    </div>
                    <!-- End Big Heading -->
                    <div class="ask-post-update">

                    <?=
                    $this->render('_form', [
                        'model' => $model,
                        /*'file' => $file,*/
                    ])
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End content -->




