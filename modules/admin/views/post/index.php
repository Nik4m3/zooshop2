<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Данные';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Внести данные', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'category:ntext',
            [
                'attribute' => 'rodent',
                'format' => 'raw',
                'filter' =>[
                    0 => 'Нет',
                    1 => 'Да',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} == 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Да' : 'Нет',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },
                ],

            [
                'attribute' => 'amphibian',
                'format' => 'raw',
                'filter' =>[
                    0 => 'Нет',
                    1 => 'Да',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} == 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Да' : 'Нет',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },
            ],

            [
                'attribute' => 'reptilie',
                'format' => 'raw',
                'filter' =>[
                    0 => 'Нет',
                    1 => 'Да',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} == 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Да' : 'Нет',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },
            ],

            [
                'attribute' => 'fish',
                'format' => 'raw',
                'filter' =>[
                    0 => 'Нет',
                    1 => 'Да',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} == 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Да' : 'Нет',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },
            ],

            [
                'attribute' => 'cat',
                'format' => 'raw',
                'filter' =>[
                    0 => 'Нет',
                    1 => 'Да',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} == 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Да' : 'Нет',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },
            ],

            [
                'attribute' => 'dog',
                'format' => 'raw',
                'filter' =>[
                    0 => 'Нет',
                    1 => 'Да',
                ],
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} == 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Да' : 'Нет',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },
            ],
            'count',
            ['class' => 'yii\grid\ActionColumn'],

        ],

    ]); ?>

</div>
