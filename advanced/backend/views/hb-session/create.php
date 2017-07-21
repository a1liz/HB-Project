<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HbSession */

$this->title = 'Create Hb Session';
$this->params['breadcrumbs'][] = ['label' => 'Hb Sessions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-session-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
