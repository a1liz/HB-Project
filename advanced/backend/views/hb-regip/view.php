<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HbRegip */

$this->title = $model->ip;
$this->params['breadcrumbs'][] = ['label' => 'Hb Regips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-regip-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ip], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ip], [
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
            'ip',
            'dateline',
            'count',
        ],
    ]) ?>

</div>
