<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HbSessionModel */

$this->title = $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Session Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-session-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'uid' => $model->uid, 'ip' => $model->ip], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'uid' => $model->uid, 'ip' => $model->ip], [
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
            'uid',
            'ip',
            'dateline',
            'errorcount',
        ],
    ]) ?>

</div>
