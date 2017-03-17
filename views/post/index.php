<?php if (count($model)): ?>
<?php foreach ($model as $item): ?>
<div class="well">
    <h3>Наименование товара: <?=$item->name?></h3>
    <p>
        Подкласс А: <?=$item->classa?>
    </p>
    <p>
        Подкласс Б: <?=$item->classb?>
    </p>
    <p>
       Количество товара: <?=$item->count?>
    </p>
</div>
<?php endforeach; ?>
<?php endif ?>
