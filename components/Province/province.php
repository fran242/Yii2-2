<?php

use yii\helpers\Html;

use app\models\Album;
use app\components\TestComponent;

$this->title = 'Lista';
$this->params['breadcrumbs'][] = $this->title;

?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $tabla ?>
    <?php 
            Yii::$app->test->display('Hola Mundo!!!');
    ?>
</div>

