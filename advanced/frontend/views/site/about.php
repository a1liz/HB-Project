<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="col-xs-6">
	<div class="duan">
		<?=Html::img('@web/images/duan.jpg',["width"=>350,"heigth"=>350])?>
		<br>段欣伯<br>
	</div>  
	<div class="duan">
		<?=Html::img('@web/images/lizhi.jpg',["width"=>350,"heigth"=>350])?>
		<br>王理治<br>
	</div>  
	</div>  
    <div class="col-xs-6">
	<div class="duan">
		<?=Html::img('@web/images/haihai.jpg',["width"=>350,"heigth"=>350])?>
		<br>姚宗海<br>
	</div>  
	<div class="duan">
		<?=Html::img('@web/images/xiaohai.jpg',["width"=>350,"heigth"=>350])?>
		<br>张鹏程<br>
	</div>  
	</div>  
	
</div>
