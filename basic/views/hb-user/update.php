<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HbUser */

$this->title = 'Update Hb User: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hb-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
