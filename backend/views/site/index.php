<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

Yii2 API


<div class="">

<h1>Links </h1>

<ul>
	<li> <?= Html::a('contact',['contact/index']) ?> </li>
	<li> <?= Html::a('group',['group/index']) ?> </li>
	<li> <?= Html::a('groupMembers',['group-member/index']) ?> </li>
</ul>

<h1> API </h1>

<ul>
	<li><?= Html::a('Api',['/api/contacts']) ?></li>
	<li><?= Html::a('group',['/api/groups']) ?></li>
	<li><?= Html::a('groupMembers',['/api/group-members']) ?></li>
<li><?= Html::a('Members By Group',['/api/group-members/bygroup/1']) ?></li>
<li><?= Html::a('Members By Not In Group',['/api/group-members/notingroup/1']) ?></li>
	</ul>
</div>
</div>
