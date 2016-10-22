<?php

namespace frontend\controllers;
use frontend\models\AskPost;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ConsultController extends Controller {
    
    
    public function actionPost() {
        $id = \yii::$app->request->get('id');
        $post = AskPost::findOne($id);
        if(empty($post)) throw new \yii\web\HttpException('404', 'Такої сторінки не існує.');
        return $this->render('post', compact('post'));
    }
    
    
    public function actionPostlist() {
        //$id = Yii::$app->user->id;
        $id = \Yii::$app->user->identity->id; 
        $query = AskPost::find()
                ->where(['user_id' => $id])
                ->orderBy('id DESC');
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 7, 
            'pageSizeParam' => false, 'forcePageParam' => false]);
        $postList = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('postlist', compact('postList', 'pages'));
    }
    
    
    
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['postlist', 'post'],
                'rules' => [
                    [
                        'actions' => ['signup__'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['postlist', 'post'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    
    
}
