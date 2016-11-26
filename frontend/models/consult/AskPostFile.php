<?php

namespace frontend\models\consult;

use Yii;

/**
 * This is the model class for table "askpostfile".
 *
 * @property integer $id
 * @property string $origin_name
 * @property string $server_name
 * @property string $extention
 * @property string $path
 * @property integer $askpost_id
 * @property integer $user_id
 *
 * @property Askpost $askpost
 * @property User $user
 */
class AskPostFile extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'askpostfile';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['origin_name', 'server_name', 'path', 'askpost_id', 'user_id'], 'required'],
            [['askpost_id', 'user_id'], 'integer'],
            [['origin_name'], 'string', 'max' => 64],
            [['server_name'], 'string', 'max' => 32],
            [['extention'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 128],
            [['path'], 'string', 'max' => 128],
            [['askpost_id'], 'exist', 'skipOnError' => true, 'targetClass' => Askpost::className(), 'targetAttribute' => ['askpost_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['user_id'], 'default', 'value' => Yii::$app->user->getId()],
            //[['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /*public function upload() {
        if ($this->validate()) {
            $this->imageFile->saveAs('useruploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }*/

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'origin_name' => 'Origin Name',
            'server_name' => 'Server Name',
            'extention' => 'Extention',
            'path' => 'Path',
            'askpost_id' => 'Askpost ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAskpost() {
        return $this->hasOne(Askpost::className(), ['id' => 'askpost_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser() {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }

}
