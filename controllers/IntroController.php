<?php

namespace app\controllers;

class IntroController extends \yii\web\Controller
{
    public function actionIndex(){
        $discos = \app\models\Intro::find()->all();
        foreach ($discos as $disco){
            echo $disco->id, " - ", $disco->titulo, " - ", $disco->anyo, "<br>";
        }
    }
}