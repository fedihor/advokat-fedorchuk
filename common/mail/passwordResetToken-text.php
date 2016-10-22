<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Вітаю вас <?= $user->username ?>,

Перейдіть за цим посиланням для відновлення пароля:

<?= $resetLink ?>
