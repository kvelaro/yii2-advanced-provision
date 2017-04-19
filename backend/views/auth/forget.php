<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Restore your password';
?>
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Restore your password</p>
        <?php $form = ActiveForm::begin(['id' => 'forget-form', 'method' => 'post']); ?>
            <div class="form-group has-feedback">
                <?= $form->field($model, 'username', ['template' => '{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}'])->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>
            </div>
        <?= Html::submitButton('Restore', ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end(); ?>
        <br/>
        <a href="<?= Yii::$app->urlManager->createUrl('/auth/login');?>">Log In</a><br>
    </div>
</div>