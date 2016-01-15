<?php

use yii\helpers\Html;

use app\models\PerfectMoney;

$this->title = 'Perfect Money Balance';
$this->params['breadcrumbs'][] = $this->title;

?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $pembalance ?>
</div>