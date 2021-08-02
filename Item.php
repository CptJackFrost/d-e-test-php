<?php

class Item
{
  private $id;
  private $name;
  private $price;

  function __construct($id, $name, $price)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }

  function id()
  {
    return "$this->id";
  }

  function name()
  {
    return "$this->name";
  }

  function price()
  {
    return "$this->price";
  }
}
