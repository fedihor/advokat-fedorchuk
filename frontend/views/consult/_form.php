<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AskPost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ask-post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label("Заоловок") ?>

    <?= $form->field($model, 'post')->textarea(['rows' => 12])->label("Текст запиту") ?>
    
    <?php /*$form->field($file, 'origin_name')->textInput(['maxlength' => true])->label("origin_name")*/ ?>

    <?php /*echo $form->field($model, 'date_post')->textInput() . $form->field($model, 'user_id')->textInput()*/ ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Зберегти' : 'Зберегти', 
                ['class' => $model->isNewRecord ? 'btn-system btn-large' : 'btn-system btn-large']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
