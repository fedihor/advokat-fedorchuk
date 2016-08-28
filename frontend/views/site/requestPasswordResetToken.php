<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Відновлення пароля';
Yii::$app->view->params['pageDetails'] = '';
?>
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span><?= Html::encode($this->title) ?></span></h4>

                <p style="padding: 15px 0;">
                    Для відновлення пароля надішліть, 
                    будь ласка, адресу електронної пошти, з якою ви зареєстровані на данному сайті.
                    Після чтого, на вказану адресу буде відправлено посилання для відновлення пароля.
                </p>

                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label('Електронна пошта') ?>

                <div class="form-group">
                    <?= Html::submitButton('Надіслати', ['class' => 'btn-system btn-large']) ?>
                </div>

                <?php ActiveForm::end(); ?>
                <!-- Divider -->
                <div class="hr1" style="margin-bottom:30px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- End content -->
