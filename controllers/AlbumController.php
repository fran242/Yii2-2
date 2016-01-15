<?php

namespace app\controllers;
use app\models\Album;

class AlbumController extends \yii\web\Controller {

    public function actionIndex() {
        $mensaje = "<p>Esta clase implementa acciones a realiza sobre la tabla \"album\"</p>";
        return $this->render('lista', ["tabla" => $mensaje]);
    }

    public function actionLista() {
        $model = new Album;
        $discos = \app\models\Lista::find()->all();
        $resultado = "<ul>";
        foreach ($discos as $key => $disco) {
            //echo $key, " -> ", $disco->id, " - ", $disco->titulo, " - ", $disco->anyo, "<br>";
            $resultado .= "<li>" . $disco->id . " - " . $disco->titulo . " - " . $disco->anyo . "</li>";
        }
        $resultado .= "</ul>";
        
        return $this->render('lista', ["tabla" => $resultado]);
    }

}
