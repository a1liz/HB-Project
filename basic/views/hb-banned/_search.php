<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HbBannedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hb-banned-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'banid') ?>

    <?= $form->field($model, 'ip') ?>

    <?= $form->field($model, 'admin') ?>

    <?= $form->field($model, 'dateline') ?>

    <?= $form->field($model, 'expiration') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
