<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ask Posts';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row">

            <div class="ask-post-index">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Create Ask Post', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'title',
                        'post:ntext',
                        'date_post',
                        'user_id',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
            </div>

        </div>
    </div>
</div>
