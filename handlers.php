<?php

session_start();
$_SESSION['LOGIN'] = '';

if (isset($_GET['search'])) {
  task6();
}

if (isset($_POST['login']) && isset($_POST['password'])) {
  task7();
}

if (isset($_FILES['userfile'])) {
  task11();
}

function task6()
{
  $text = $_GET['search'];
  if ($text != "") {
    echo "Вы искали $text";
  }
}


function task7()
{
  $login = "admin";
  $password = "qwe123";
  if ($_SESSION['LOGIN'] === "YES") {
    echo "привет, LOGIN!";
  } else {
    if ($_POST['login'] === $login && $_POST['password'] === $password) {
      $_SESSION['LOGIN'] = 'YES';
      task7();
    } else {
      echo "Неверный логин или пароль!";
    }
  }
}

function task11()
{
  $uploads_dir = 'images/';
  $upload_file = $uploads_dir . basename($_FILES['userfile']['name']);
  $isPng = strcasecmp(substr($upload_file, -4, 4), '.png');
  $isJpg = strcasecmp(substr($upload_file, -4, 4), '.jpg');

  if ($isJpg === 0 || $isPng === 0) {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
      echo "Файл корректен и был успешно загружен.";
    } else {
      echo "Возможная атака с помощью файловой загрузки!";
    }
  } else {
    echo "Недопустимый формат файла";
  }
}
