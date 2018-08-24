<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupMember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'groupID')->textInput() ?>

    <?= $form->field($model, 'contactID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
