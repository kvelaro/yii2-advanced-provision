<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\RegisterForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'login';
?>
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'method' => 'post']); ?>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'username', ['template' => '{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}'])->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>
        </div>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'password1', ['template' => '{input}<span class="glyphicon glyphicon-qrcode form-control-feedback"></span>{error}'])->passwordInput(['placeholder' => 'Password']) ?>
        </div>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'password2', ['template' => '{input}<span class="glyphicon glyphicon-qrcode form-control-feedback"></span>{error}'])->passwordInput(['placeholder' => 'Retype password']) ?>
        </div>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'email', ['template' => '{input}<span class="glyphicon glyphicon-envelope form-control-feedback"></span>{error}'])->textInput(['placeholder' => 'Email']) ?>
        </div>
        <?= Html::submitButton('Register', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'register-button']); ?>
        <?php ActiveForm::end(); ?>
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                Google+</a>
        </div>
        <a href="<?=Yii::$app->urlManager->createUrl('/auth/login');?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>








