<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BazaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baza-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'provinciya') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'shirota') ?>

    <?php // echo $form->field($model, 'dolgota') ?>

    <?php // echo $form->field($model, 'sohrannost') ?>

    <?php // echo $form->field($model, 'dostupnost') ?>

    <?php // echo $form->field($model, 'tochnost') ?>

    <?php // echo $form->field($model, 'hz') ?>

    <?php // echo $form->field($model, 'opisanie') ?>

    <?php // echo $form->field($model, 'images') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
