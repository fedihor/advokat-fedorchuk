<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AskPost */

$this->title = 'Ваш запит';
Yii::$app->view->params['pageDetails'] = '';
Yii::$app->view->params['crumb'] = '<li>' . Html::a('Консультація онлайн', ['/consult/index']) . '</li>';
$web = yii\helpers\Url::to('@web');
?>

<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row blog-post-page">
            <div class="col-md-9 blog-box">
                <?php if ($model->state == 0): ?>
                    <!-- Start Call Action -->
                    <div class="call-action call-action-boxed call-action-style3 clearfix">
                        <div class="button-side" style="margin-top:10px;">
                            <a href="#" class="btn-system border-btn btn-medium btn-wite">Надіслати</a>
                        </div>
                        <h2 class="primary"><strong>Запит</strong> збережено, але ще не надіслано адвокату.</h2>
                        <p>Для того, щоб ваш запит отримав адвокат, натисніть кнопку <strong>Надісліти</strong>.</p>
                    </div><br>
                    <!-- End Call Action -->
                <?php elseif ($model->state == 1 && !empty($updateMessage)): ?>
                    <div class="alert alert-dismissible call-action call-action-boxed call-action-style1 no-descripton clearfix" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= $updateMessage ?>!
                    </div><br>
                <?php endif ?>

                <!-- Start Single Post Area -->
                <div class="blog-post gallery-post">
                    <!-- Start Single Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="glyphicon glyphicon-question-sign"></i></div>
                        <h2><?= $model->title ?></h2>
                        <ul class="post-meta">
                            <li>№ <?= $model->id . ' '  ?></li>
                            <li><?= Yii::$app->formatter->asDate($model->date_post, 'php:d.m.Y H:m'); ?></li>
                            <li><a href="#">3 додатки</a></li>
                            <li><a href="#">2 доповнення</a></li>
                            <li><a href="#">3 відповіді</a></li>
                        </ul>
                        <p>
                            <?= $model->post ?>
                        </p>

                        
                        
                        
                        
                        <p>
                            <?php $form = ActiveForm::begin(['action' => 'upload', 'options' => ['enctype' => 'multipart/form-data']]) ?>

                            <?= $form->field($file, 'imageFile')->fileInput() ?>
                            
                            <?= $form->field($file, 'askpost_id')->hiddenInput(['value' => $model->id])->label(false) ?>

                            <button>Submit</button>

                            <?php ActiveForm::end() ?>
                        </p>




                        <!--                        <div class="text-right">-->
                        <?= /* Html::a('Редагувати', ['update', 'id' => $model->id], 
                          ['class' => 'btn-system btn-mini border-btn btn-gray']) */ ' '
                        ?>
                        <?=
                        /* Html::a('Видалити', ['delete', 'id' => $model->id], [
                          'class' => 'btn-system btn-mini border-btn',
                          'data' => [
                          'confirm' => 'Ви впевнені, що хочете видалити запит?',
                          'method' => 'post',
                          ],
                          ]) */ ' '
                        ?>
                        <!--                        </div>-->

                    </div>
                    <!-- End Single Post Content -->

                </div>
                <!-- End Single Post Area -->

                <!-- Start Single Post Area -->
                <div class="blog-post gallery-post">
                    <!-- Start Single Post Content -->
                    <div class="post-content">
                        <div class="post-type"><i class="glyphicon glyphicon-hand-up"></i></div>
                        <h2>Відповідь адвоката на: Треба розірвати шлюб так, щоб квартира дісталась мені</h2>
                        <ul class="post-meta">
                            <li>№ 1</li>
                            <li>04.08.2016 23:05</li>
                            <li><a href="#">1 додаток</a></li>
                            <li><a href="#">2 доповнення</a></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

                        <div class="post-bottom clearfix">
                            <div class="post-tags-list">
                                <a href="#">Wordpress</a>
                                <a href="#">Jquery</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post Content -->

                </div>
                <!-- End Single Post Area -->

            </div>


            <!-- Sidebar -->
            <div class="col-md-3 sidebar right-sidebar">

                <!-- Categories Widget -->
                <div class="widget widget-categories">
                    <h4>Доступні дії <span class="head-line"></span></h4>
                    <ul>
                        <li>
                            <?= Html::a('Редагувати', ['update', 'id' => $model->id]) ?>
                        </li>
                        <li>
                            <?=
                            Html::a('Видалити', ['delete', 'id' => $model->id], [
                                'data' => [
                                    'confirm' => 'Ви впевнені, що хочете видалити запит?',
                                    'method' => 'post',
                                ],
                            ])
                            ?>
                        </li>
                        <li>


                            <?php
                            //$form = ActiveForm::begin(); //Default Active Form begin
//                            $form = ActiveForm::begin([
//                                'id' => 'active-form',
//                                'options' => [
//                                    'class' => 'form-horizontal',
//                                    'enctype' => 'multipart/form-data'
//                                ],
//                            ]);
//                            
//                            echo $form->field($model, 'uploadFile')->fileInput()->label('Додати файл');
//                            
//                            ActiveForm::end();
                            ?>





                        </li>
                        <li>
                            <a href="#">Надіслати</a>
                        </li>
                        <li>
                            <a href="#">Додати нове питання</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End sidebar-->
        </div>
    </div>
</div>
<!-- End Content -->

