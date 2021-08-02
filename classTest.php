<?php

include 'Product.php';

$testProduct = new Product();
$testProduct -> showPrice();
$testProduct -> createProduct('матрешка', '1000р');
echo "<br/>";
$testProduct -> showPrice();