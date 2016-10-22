<?php

namespace frontend\models\consult;

use Yii;

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
 * @property Askpostfile[] $askpostfiles
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
        return [
            [['title', 'post'], 'required'],
            [['post'], 'string'],
            //[['date_post'], 'safe'],
            [['user_id', 'state'], 'integer'],
            [['title'], 'string', 'max' => 128],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['user_id'], 'default', 'value' => Yii::$app->user->getId()],
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
            'state' => 'State',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAskpostfiles()
    {
        return $this->hasMany(Askpostfile::className(), ['askpost_id' => 'id']);
    }
}
