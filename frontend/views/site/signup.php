<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Реєстрація';
Yii::$app->view->params['pageDetails'] = '';
?>

<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Форма реєстрації нового користувача</span></h4>

                <p style="padding: 15px 0;">Для реєстрації на сайті заповніть, будь ласка, форму:</p>

                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label("Ім'я") ?>

                    <?= $form->field($model, 'email')->label('Електронна пошта') ?>

                    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Зареєструватись', ['class' => 'btn-system btn-large', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
                <!-- Divider -->
                <div class="hr1" style="margin-bottom:30px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- End content -->
