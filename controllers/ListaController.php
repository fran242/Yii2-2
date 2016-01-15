<?php

namespace app\controllers;

class ListaController extends \yii\web\Controller
{
    public function actionIndex(){
        echo "<h1>Esta clase de acciones realiza operaciones sobre la tabla \"album\"</h1>";
    }
    
    public function actionAlbum(){
        $discos = \app\models\Album::find()->all();
        foreach ($discos as $disco){
            echo $disco->id, " - ", $disco->titulo, " - ", $disco->anyo, "<br>";
        }
        
//        $message = "Mensaje de evento";
//        $event = new Event;
        //$event->message = $message;
        $this->trigger(\app\components\TestComponent::EVENT_CLICKLIST, $event);
    }
    
}