<?php



$titulo_nota= $_POST['nombreNota'].'.txt';

$directorio='archivos/'.$titulo_nota;
echo $titulo_nota;



$texto_nota= $_POST['textoNota'];


$fh = fopen($directorio, 'w') or die("Se produjo un error al crear el archivo");
  

  fwrite($fh, $texto_nota) or die("No se pudo escribir en el archivo");
  
  fclose($fh);
  
  echo "Se ha escrito sin problemas";
  
  echo getcwd().'<br>';

  header('Location: index.php');

     



?>