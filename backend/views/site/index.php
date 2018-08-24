<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

Yii2 API


<div class="">

<ul>
	<li> <?= Html::a('contact',['contact/index']) ?> </li>
	
	<li> <?= Html::a('Api',['/api/contact']) ?> </li>
</ul>

</div>
</div>
