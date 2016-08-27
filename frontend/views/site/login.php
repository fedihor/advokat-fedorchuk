<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вхід';
Yii::$app->view->params['pageDetails'] = '';
?>
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Вхід на сайт для зареєстрованого користувача</span></h4>

                <p style="padding: 15px 0;">Для входу на сайт скористайтесь, будь ласка, своїм іменем та паролем:</p>

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label("Ім'я") ?>

                    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                    <?= $form->field($model, 'rememberMe')->checkbox()->label("&nbsp;&nbsp;&nbsp;Запам'ятати") ?>

                    <div style="color:#999;margin:1em 0">
                        Якщо ви забули пароль, ви можете <?= Html::a('відновити його', ['site/request-password-reset']) ?>.
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Увійти', ['class' => 'btn-system btn-large', 'name' => 'login-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
                <!-- Divider -->
                <div class="hr1" style="margin-bottom:30px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- End content -->