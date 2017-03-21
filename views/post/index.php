<?php if (count($model)): ?>
<?php foreach ($model as $item): ?>
<div class="well">
    <h3>Наименование товара: <b><?=$item->name?></b></h3>
    <p>Категория А : <b><?=$item->category?></b></p>
    <p>Категория Б:
            <?php if ($item->rodent == '1'):?>
                <i>Грызуны</i>
            <?php endif; ?>
            <?php if ($item->amphibian == '1'):?>
                <i>Земноводные</i>
            <?php endif; ?>
            <?php if ($item->reptilie == '1'):?>
                <i>Рептилии</i>
            <?php endif; ?>
            <?php if ($item->fish == '1'):?>
                <i>Рыбы</i>
            <?php endif; ?>
            <?php if ($item->cat == '1'):?>
                <i>Кошки</i>
            <?php endif; ?>
            <?php if ($item->dog == '1'):?>
                <i>Собаки</i>
            <?php endif; ?>
            <p>Количество товара : <?=$item->count?></p>
</div>
    <?php endforeach; ?>
<?php endif ?>