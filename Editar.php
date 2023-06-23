<?php 


    $post=$_POST['Archivos'];
	$dir = 'archivos/'.$post;
	$archivo = fopen($dir, 'r');
    
    
    

	

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">NOTAS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="crear_carpeta.html">Crear Carpeta </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="crear_archivo.html">Crear Archivo txt</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php  $texto_antiguo= fread($archivo, filesize($dir));
        echo 'Nombre del Txt: '.$post;
        echo '<br>';

        echo 'Contenido del txt: ' .$texto_antiguo;
        echo '<br>';

        session_start();

        echo'Si no desea cambiar su mensaje, vuelva a la pantalla principal <a href="index.php">AQUI</a>';

        $_SESSION['post'] = $post;
        $_SESSION['msj'] = $texto_antiguo;

        
      ?>

<div class="container">
        <div class="row">
            <div class="col-lg-8">
                

                <form action="modificar.php" method="post">

                Titulo

                <input type="text" name="nombreNota" id="idNota"  placeholder='nuevo nombre' >.txt<br><br>
                <textarea name="textoNota" cols="30" rows="10" placeholder="Nuevo texto" ></textarea><br>

                <input class="btn btn-primary" type="submit" value="Crear Directorio">
                </form>



                

                


                <?php fclose($archivo); 


                    /*$directorio='archivos/'.$post;
                    unlink($directorio)*/
                
                ?>

            </div>

        </div>

</div>
    
</body>
</html>