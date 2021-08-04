<?php

session_start();
if (!isset($_SESSION['LOGIN'])) {
  $_SESSION['LOGIN'] = "";
}

if (isset($_POST['login']) && isset($_POST['password'])) {
  task7();
}

function task7()
{
  $login = "admin";
  $password = "qwe123";
  if ($_SESSION['LOGIN'] === "YES") {
    return;
  } else {
    if ($_POST['login'] === $login && $_POST['password'] === $password) {
      $_SESSION['LOGIN'] = 'YES';
      task7();
    } else {
      echo "Неверный логин или пароль!";
    }
  }
}

if ($_SESSION['LOGIN'] === "YES") : ?>
  <span>"Привет, LOGIN!"</span>

<?php else : ?>


  <form method="POST" name="Авторизация">
    <input type="text" name="login" id="login" required>
    <input type="password" name="password" id="password" required>
    <input type="submit" value="отправить">
  </form>

<?php endif ?>