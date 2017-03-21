<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'rodent') ?>

    <?= $form->field($model, 'amphibian') ?>

    <?= $form->field($model, 'reptilie') ?>

    <?= $form->field($model, 'fish') ?>

    <?= $form->field($model, 'cat') ?>

    <?= $form->field($model, 'dog') ?>

    <?= $form->field($model, 'count') ?>


    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
