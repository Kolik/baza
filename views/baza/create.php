<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Baza */

$this->title = 'Create Baza';
$this->params['breadcrumbs'][] = ['label' => 'Bazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
