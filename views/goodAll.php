<?php
/** @var  \App\models\Good[] $goods */
?>

<?php foreach ($goods as $good) :?>
    <h2><?= $goods->name ?></h2>
    <a href="?с=user&a=one&id=<?= $good->id?>">подробнее</a>
    <hr>
<?php endforeach;?>

