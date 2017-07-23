<?php
use yii\helpers\Html;
?>

<div class="hb-article">
	<div class="title">
		<h2><a href="<?= $model->url;?>"><?= Html::encode($model->title);?></a></h2>
		<div class="author">
			<span class="glyphicon glyphicon-time" aria-hidden="true"></span><em><?= date($model->pubdate)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></em>
		</div>
	</div>

	<div class="content">
		<?= $model->beginning;?>
	</div>
</div>