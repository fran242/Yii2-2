<?php

namespace app\models;

class Album extends \yii\db\ActiveRecord
{
//    public $nombre = "Soy";
//    public $autor = "Fran";
//    public $anyo = "242";
    
    public static function tableName() {
        return "album";
    }
}