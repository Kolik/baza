<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Baza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinciya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shirota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dolgota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sohrannost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dostupnost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tochnost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opisanie')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'images')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
