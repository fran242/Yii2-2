<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form ActiveForm */
?>
<div class="site-usuarios">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nickName') ?>
        <?= $form->field($model, 'firstName') ?>
        <?= $form->field($model, 'firstSurname') ?>
        <?= $form->field($model, 'secondSurname') ?>
        <?= $form->field($model, 'userType_id') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'lastVisitDate') ?>
        <?= $form->field($model, 'lastPassResetDate') ?>
        <?= $form->field($model, 'resetCount') ?>
        <?= $form->field($model, 'active') ?>
        <?= $form->field($model, 'birthDay') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-usuarios -->
