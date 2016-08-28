<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

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

                <p style="padding: 15px 0;">Встановіть, будь ласка, ваш новий пароль:</p>

                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true])->label('Новий пароль') ?>

                <div class="form-group">
                    <?= Html::submitButton('Зберегти', ['class' => 'btn-system btn-large']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>