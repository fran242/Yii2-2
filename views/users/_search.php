<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nickName') ?>

    <?= $form->field($model, 'firstName') ?>

    <?= $form->field($model, 'firstSurname') ?>

    <?= $form->field($model, 'secondSurname') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'birthDay') ?>

    <?php // echo $form->field($model, 'lastVisitDate') ?>

    <?php // echo $form->field($model, 'lastPassResetDate') ?>

    <?php // echo $form->field($model, 'resetCount') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'userType') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
