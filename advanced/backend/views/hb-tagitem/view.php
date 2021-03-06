<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HbTagitem */

$this->title = $model->tagid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Tagitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-tagitem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tagid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tagid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tagid',
            'aid',
            'idtype',
        ],
    ]) ?>

</div>
