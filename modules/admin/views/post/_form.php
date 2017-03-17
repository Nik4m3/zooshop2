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

    <?= $form->field($model, 'classa')->radioList([
        'Животные' => 'Животные',
        'Корма' => 'Корма',
        'Сопутствующие товары' => 'Сопутствующие товары'
    ]) ?>

    <?= $form->field($model, 'classb')->checkboxList([
        'Грызуны' => 'Грызуны',
        'Земноводные' => 'Земноводные',
        'Рептилии' => 'Рептилии',
        'Рыбы' => 'Рыбы',
        'Кошки' => 'Кошки',
        'Собаки' => 'Собаки',
    ]) ?>


    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
