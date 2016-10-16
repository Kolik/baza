<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\baza;



/* @var $this yii\web\View */
/* @var $searchModel app\models\BazaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */





$this->title = 'Bazas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baza-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Baza', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
                    [
            'attribute' => 'country',
			'filter'=>ArrayHelper::map(Baza::find()->asArray()->all(), 'country', 'country'),
        ],
            'provinciya',
            'type',
            'name',
             'link',
             'shirota',
             'dolgota',
             'sohrannost',
             'dostupnost',
             'tochnost',
             'hz',
             //'opisanie:ntext',
             [
            'attribute' => 'images',
			'format' => 'raw',
			            'value' => function($data){
							
							if (!empty($data->images)){
								$images = explode("," , $data->images);
					
								foreach ($images as $img)
								{
									$value .= '<img data-lightbox="img'.$data->id.'" style="display: none" src="file:///C:/'.$img.'" /> ';
								}
								$value .= ' <a href="file:///C:/images/1/1.jpg" >Image </a>';
								return $value;
							}
							else 
								return "No";
            },
        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
