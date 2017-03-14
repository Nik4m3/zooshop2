<?php if (count($model)): ?>
<?php foreach ($model as $item): ?>
<div class="well">
    <h3>Тип товара: <?=$item->type_product?></h3>
    <p>
        Наименование товара: <?=$item->name_product?>
    </p>
    <p>
       Количество товара: <?=$item->quantity?>
    </p>
</div>
<?php endforeach; ?>
<?php endif ?>
