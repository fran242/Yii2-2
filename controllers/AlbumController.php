<?php

namespace app\controllers;
use app\models\Usuarios;

class AlbumController extends \yii\web\Controller {

    public function actionIndex() {
        $mensaje = "<p>Esta clase implementa acciones a realiza sobre la tabla \"album\"</p>";
        return $this->render('lista', ["tabla" => $mensaje]);
    }

    public function actionLista() {
        $model = new Usuarios;
        $discos = \app\models\Lista::find()->all();
        $html = "<ul>";
        foreach ($discos as $key => $disco) {
            //echo $key, " -> ", $disco->id, " - ", $disco->titulo, " - ", $disco->anyo, "<br>";
            $html .= "<li>" . $disco->id . " - " . $disco->titulo . " - " . $disco->anyo . "</li>";
        }
        $html .= "</ul>";
        //$this->trigger(\app\components\TestComponent::EVENT_CLICKONLIST);
        return $this->render('lista', ["tabla" =>$html]);
    }

}
