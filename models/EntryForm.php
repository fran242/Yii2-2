<?php


namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $surname;
    public $email;

    public function rules()
    {
        return [
            [['name', 'surname', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}