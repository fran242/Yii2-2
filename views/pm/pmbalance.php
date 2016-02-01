<?php

use yii\helpers\Html;
use yii\base\Event;
use app\components\TestComponent;

//use yii\base\Component;
//use yii\base\Event;

use app\models\PerfectMoney;

$this->title = 'Perfect Money Balance';
$this->params['breadcrumbs'][] = $this->title;

?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
        $salida = "<ul>";
        foreach ($balance as $key => $value) {
            $salida .= "<li>ID Cuenta =  $key ----> $value </li>";
        }
        $salida .= "</ul>";
        
        echo $salida;
     
        //Yii::$app->test->display('Hola Mundo!!!');
        //$this->trigger(\app\components\TestComponent::EVENT_CLICKONLIST);           
//        echo "<pre>";
//        var_dump($balance);
//        echo "</pre>";
        Yii::$app->oneuser->viewOne(6);
    ?>
</div>