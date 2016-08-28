<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span><?= Html::encode($this->title) ?></span></h4>

                <div class="site-error">

                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>

                    <p>
                        Данна помилка виникла коли веб-сервер виконував ваш запит.
                    </p>
                    <p>
                        Зверніться до нас, якщо ви вважаете, що це помилка сервера.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>