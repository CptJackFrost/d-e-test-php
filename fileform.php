<form method="POST" enctype="multipart/form-data" name="userfile">
  <input type="file" name="userfile" id="userfile" required>
  <input type="submit" value="отправить">
</form>

<?php
if (isset($_FILES['userfile'])) {
  task11();
}

function task11()
{
  $uploads_dir = 'images/';
  $upload_file = $uploads_dir . basename($_FILES['userfile']['name']);
  $isPng = strcasecmp(substr($upload_file, -4, 4), '.png');
  $isJpg = strcasecmp(substr($upload_file, -4, 4), '.jpg');

  if ($isJpg === 0 || $isPng === 0) {
    move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file);
    echo "Файл корректен и был успешно загружен.";
  } else {
    echo "Недопустимый формат файла";
  }
}
?>