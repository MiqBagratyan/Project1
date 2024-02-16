<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Register';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'lastname')->textInput() ?>
<?= $form->field($model, 'login')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group">
    <?= Html::submitButton('Register', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>


