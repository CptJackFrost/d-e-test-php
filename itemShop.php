<?php

include 'Item.php';

session_start();
if (!isset($_SESSION['CART'])) {
  $_SESSION['CART'] = [];
}


$items = [
  new Item(1, 'Флешка', 300),
  new Item(2, 'Роутер', 2000),
  new Item(3, 'Монитор', 7000)
];

if (isset($_POST['name'])) {
  $newItem = $_POST['name'];
  if (!array_key_exists($newItem, $_SESSION['CART'])) {
    $_SESSION['CART'][$newItem] = 0;
  }
  $_SESSION['CART']["$newItem"] += 1;
}

echo "<br/>";

foreach ($items as $key => $item) : ?>

  <span><?php echo $item->id() . '. ' . $item->name() . ' - ' . $item->price() ?></span>
  <form method="POST">
    <input type="hidden" name="id" value="<?php echo $item->id() ?>">
    <input type="hidden" name="name" value="<?php echo $item->name() ?>">
    <input type="hidden" name="price" value="<?php echo $item->price() ?>">
    <input type="submit">
  </form>

<?php endforeach ?>

<br />
<br />
<span>В корзине:</span>
<br />

<?php foreach ($_SESSION['CART'] as $key => $item) {
  print_r(json_encode([$key => $item], JSON_UNESCAPED_UNICODE));
}

?>