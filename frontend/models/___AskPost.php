<?php

namespace frontend\models;

use Yii;
//use common\models\User;

/**
 * This is the model class for table "askpost".
 *
 * @property integer $id
 * @property string $title
 * @property string $post
 * @property string $date_post
 * @property integer $user_id
 * @property integer $state
 * 
 * @property User $user
 */
class AskPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'askpost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        //date_default_timezone_set("Europe/Kiev");
        
        return [
            [['title', 'post'], 'required'],
            [['post'], 'string'],
            //[['date_post'], 'safe'],
            //[['date_post'], 'default', 'value' => date("Y-m-d H:i:s")],
            [['user_id'], 'integer'],
            [['title'], 'string', 'max' => 128],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['user_id'], 'default', 'value' => Yii::$app->user->getId()],
            [['state'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'post' => 'Post',
            'date_post' => 'Date Post',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }
}
