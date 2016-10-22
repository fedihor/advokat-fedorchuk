<?php

namespace frontend\models\consult;

use Yii;

class UploadForm extends \yii\base\Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $askpost_id;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
//            [['imageFile', 'askpost_id'], 'required'],
//            [['askpost_id'], 'integer'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('useruploads/' . Yii::$app->user->getIdentity()->username . '/' . $this->askpost_id . '/' . 
                    $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
