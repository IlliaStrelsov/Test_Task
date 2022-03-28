<?php


use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var \app\models\Certificates $model
 */
$this->title = 'Certificate';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
    <h2><?= Html::encode($this->title) ?></h2>
    <table id="customer">
        <tr>
            <th>Id</th>
            <th>Course Name</th>
            <th>Student Name</th>
            <th>Data Course Finished</th>
        </tr>
        <tr>
            <th><?= $model->getPk() ?></th>
            <th><?= $model->getCourseName() ?></th>
            <th><?= $model->getStudentName() ?></th>
            <th><?= $model->getDateCourseFinished() ?></th>
        </tr>
    </table>


    <?php
    $qrCode = new QrCode(Url::to(['certificates/view' ,'id' => $model->getPk()],true));
    $output = new Output\Svg();
    echo $output->output($qrCode, 100, 'white', 'black');
    ?>
</div>
