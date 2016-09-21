<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\Alert;

//use yii\captcha\Captcha;

$this->title = 'Контакти';
Yii::$app->view->params['pageDetails'] = 'Контакти';
?>
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1296.9969291959678!2d32.053671911117526!3d49.446833088296906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14c839b874bcb%3A0xca2c8f3761247622!2z0LHRg9C70YzQstCw0YAg0KjQtdCy0YfQtdC90LrQsCwgMTk0LCDQp9C10YDQutCw0YHQuCwg0KfQtdGA0LrQsNGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1471814176939" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<a name="mform"></a>
<!-- Start Content -->
<div id="content">
    <a name="mform"></a>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Надіслати листа</span></h4>
                
                <?= Alert::widget(); ?>
                
                <?php $form = ActiveForm::begin(['action' => ['site/contact#mform'], 'id' => 'contact-form', 'options' => ['class' => 'contact-form']]); ?>
               
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label("Ім'я") ?>

                    <?= $form->field($model, 'email')->label("Електронна пошта") ?>

                    <?= $form->field($model, 'subject')->label("Тема листа") ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 7])->label("Тіло листа") ?>

                    <?php /* echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                      'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                      ]) */ ?>
                    <div class="form-group">
                        <?= Html::submitButton('Надіслати', ['class' => 'btn-system btn-large', 'name' => 'contact-button', 'id' => "submit"]) ?>
                    </div>

                <?php ActiveForm::end(); ?>
                <!-- End Contact Form -->
                
                <!-- Divider -->
                <div class="hr1" style="margin-bottom:30px;"></div>
                
            </div>
            <div class="col-md-4">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Контактна інформація</span></h4>

                <!-- Some Info -->
                <p>
                    Дівчино вишли листа. Моя адреса проста.<br>
                    На Україні, просто хлопчині, Дівчино вишли листа.
                </p>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:10px;"></div>

                <!-- Info - Icons List -->
                <ul class="icons-list">
                    <li><i class="head-icon glyphicon glyphicon-globe"></i> <strong>Адреса:</strong> бульвар Шевченка, буд. 194, м.&nbsp;Черкаси, Черкаська обл., 18000</li>
                    <li><i class="head-icon glyphicon glyphicon-envelope"></i> <strong>Ел. пошта:</strong> <a href='mailto:advokat-fedorchuk@e-mail.ua'>advokat-fedorchuk@e-mail.ua</a></li>
                    <li><i class="head-iconw glyphicon glyphicon-earphone"></i> <strong>Телефон:</strong> +38 063 464 54 54</li>
                </ul>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:30px;"></div>

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Робочі години</span></h4>

                <!-- Info - List -->
                <ul class="list-unstyled">
                    <li><strong>Понеділок - п'ятниця</strong> - з 12:00 до 14:00</li>
                    <li><strong>Субота, неділя</strong> - вихідний</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End content -->


