<?php

namespace frontend\models;
use yii\db\ActiveRecord;


class AskPost extends ActiveRecord {
    
    public static function tableName() {
        return 'askpost';
    }
    
}
