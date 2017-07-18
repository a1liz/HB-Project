<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HbUserstatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hb Userstatus Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-userstatus-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hb Userstatus Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'regip',
            'lastip',
            'profileprogress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
