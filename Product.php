<?php

class Product
{
  private $title = "неизвестный товар";
  private $price = 'цена не установлена';

  public function createProduct ($title, $price) {
    $this->title = $title;
    $this->price = $price;
  }

  public function showPrice () {
    echo "Цена товара: $this->price";
  }
}
