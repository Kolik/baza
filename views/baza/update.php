<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Baza */

$this->title = 'Update Baza: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="baza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
