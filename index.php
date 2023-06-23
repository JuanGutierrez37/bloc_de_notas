<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>NOTAS</title>
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
                <a class="nav-link" href="crear_archivo.html">Crear Archivo txt</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  
<?php 

$dir = 'archivos';
$a = array_diff(scandir($dir), array('..', '.'));
//$a = scandir($dir,1);


?>

<br>
    

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table id="tableselect" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ARCHIVOS</th>
                            

                        </tr>

                    </thead>
                    <tbody>

                    <?php foreach ($a as $key => $value) { ?>
                      <tr>
                        <td> <?php echo $value;?></td>
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                </table>

                <a href="Editar_index.php">Leer O Editar Una Nota</a>
                <hr>

                <a href="Eliminar_index.php">Eliminar Un Nota</a>
            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html> 