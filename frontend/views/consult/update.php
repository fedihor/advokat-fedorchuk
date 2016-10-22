<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AskPost */

$this->title = 'Update Ask Post: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ask Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';



$this->title = 'Консультація онлайн';
Yii::$app->view->params['pageDetails'] = '';
Yii::$app->view->params['crumb'] = '<li>' . Html::a('Консультація онлайн', ['/consult/index']) . '</li>';   
$web = yii\helpers\Url::to('@web');

?>
<div class="ask-post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
