<?php

use app\models\Certificates;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $qr */

$this->title = 'Certificates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Certificates', ['create'], ['class' => 'btn btn-success']) ?>

    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'course_name',
            'student_name',
            'date_course_finished:ntext',
            'date_created',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Certificates $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' =>'{pdf}',
                'buttons' => [
                        'pdf' => function($url){
                            return Html::a('Download Certificate', $url, ['class' => 'btn btn-info']);
                        }
                ]
            ],
        ],
    ]); ?>


</div>
