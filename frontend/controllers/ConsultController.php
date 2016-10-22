<?php

namespace frontend\controllers;

use Yii;
use frontend\models\consult\AskPost;
use frontend\models\consult\AskPostFile;
use frontend\models\consult\UploadForm;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\FileHelper;

/**
 * ConsultController implements the CRUD actions for AskPost model.
 */
class ConsultController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AskPost models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => AskPost::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AskPost model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        
        $file = new UploadForm();
        
        $file->imageFile = UploadedFile::getInstance($file, 'imageFile');
        
        //$formRes = $file->upload();
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'file' => $file,
        ]);
    }

    /**
     * Creates a new AskPost model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new AskPost();
        //$file = new AskPostFile();



        if ($model->load(Yii::$app->request->post()) && $model->save() /*&& $file->load(Yii::$app->request->post())*/) {


            /*$file->load(Yii::$app->request->post());
            $file->path = "pathddddddddddd";
            $file->server_name = "server_namffffe";
            $file->askpost_id = 70;
            $file->user_id = 2;

            $file->save();*/

            FileHelper::createDirectory('useruploads/' . Yii::$app->user->identity->username . '/' . $model->id);

            
            /*return $this->render('view', [

                        'file' => $file,'id' => $model->id,'model' => $model,
            ]);*/
            

            
            return $this->redirect(['view', 'id' => $model->id]);
        } else {

            return $this->render('create', [
                        'model' => $model,
                        /*'file' => $file,*/
            ]);
        }
    }
    
    public function actionUpload() {
        
        
        
        $file = new UploadForm();

        if (Yii::$app->request->isPost) {
            
            $request = Yii::$app->request;
            $params = $request->bodyParams;
            $file->askpost_id = $request->getBodyParam('UploadForm')['askpost_id'];
            
            $file->load(Yii::$app->request->post());
            
            FileHelper::createDirectory('useruploads/' . Yii::$app->user->identity->username . '/' . $file->askpost_id);
            
            $file->imageFile = UploadedFile::getInstance($file, 'imageFile');
            if ($file->upload()) {
                // file is uploaded successfully
                return;
            }
        }
        
        
        return $this->render('view', [
            'model' => $this->findModel($file->askpost_id),
        ]);
    }

    /**
     * Updates an existing AskPost model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AskPost model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSend($id) {

        date_default_timezone_set("Europe/Kiev");

        $model = AskPost::find()->where(['id' => $id, 'state' => 0, 'user_id' => \Yii::$app->user->identity->id])->one();

        $updRes = 0;

        if (!empty($model)) {
            $model->state = 1;
            $model->date_post = date("Y-m-d H:i:s");
            $updRes = $model->update();
        }

        $updateMessage = '';

        if ($updRes == 1) {
            $updateMessage = 'Запит успішно відправлено адвокату';
        }

        return $this->render('view', ['model' => $this->findModel($id), 'updateMessage' => $updateMessage]);
    }

    /**
     * Finds the AskPost model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AskPost the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = AskPost::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Сторінка не існує.');
        }
    }

}
