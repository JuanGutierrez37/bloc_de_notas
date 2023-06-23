<?php

$post=$_POST['Archivos'];
echo $post;

$directorio='archivos/'.$post;

If (rmdir($directorio)) {
  echo 'file was successfully deleted';
} else {
  unlink($directorio);
}

header('Location: index.php');
?>