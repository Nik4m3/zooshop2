<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category')->radioList([
        'Животные' => 'Животные',
        'Корма' => 'Корма',
        'Сопутствующие товары' => 'Сопутствующие товары'
    ]) ?>

    <?= $form->field($model, 'rodent')->checkbox(['label' => 'Грызуны']) ?>

    <?= $form->field($model, 'amphibian')->checkbox(['label' => 'Земноводные']) ?>

    <?= $form->field($model, 'reptilie')->checkbox(['label' => 'Рептилии']) ?>

    <?= $form->field($model, 'fish')->checkbox(['label' => 'Рыбы']) ?>

    <?= $form->field($model, 'cat')->checkbox(['label' => 'Кошки']) ?>

    <?= $form->field($model, 'dog')->checkbox(['label' => 'Собаки']) ?>

    <?= $form->field($model, 'count')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
