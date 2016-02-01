<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="site-users-form1">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'city') ?>
        <?= $form->field($model, 'lastVisitDate') ?>
        <?= $form->field($model, 'lastPassResetDate') ?>
        <?= $form->field($model, 'resetCount') ?>
        <?= $form->field($model, 'active') ?>
        <?= $form->field($model, 'userType') ?>
        <?= $form->field($model, 'created') ?>
        <?= $form->field($model, 'updated') ?>
        <?= $form->field($model, 'birthDay') ?>
        <?= $form->field($model, 'nickName') ?>
        <?= $form->field($model, 'firstName') ?>
        <?= $form->field($model, 'firstSurname') ?>
        <?= $form->field($model, 'secondSurname') ?>
        <?= $form->field($model, 'password') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-users-form1 -->
