<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HbArticle */

$this->title = $model->aid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->aid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->aid], [
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
            'aid',
            'title',
            'content:ntext',
            'author',
            'pubdate',
        ],
        'template'=>'<tr><th style="width:120px;">{label}</th><td>{value}</td></tr>' 
    ]) ?>

</div>
