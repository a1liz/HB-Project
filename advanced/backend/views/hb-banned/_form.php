<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HbBanned */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hb-banned-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin')->textInput() ?>

    <?= $form->field($model, 'dateline')->textInput() ?>

    <?= $form->field($model, 'expiration')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('返回', ['index', 'id' => $model->banid], ['class' => 'btn btn-danger']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
