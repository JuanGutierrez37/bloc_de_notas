<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Eliminar</title>
</head>
<body>
<?php
$dir = 'archivos';
$a = array_diff(scandir($dir), array('..', '.'));
?>

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

<div class="container">
        <div class="row">
            <div class="col-lg-8">
            <form action="Editar.php" method="post">
                <select name="Archivos">
                    <?php foreach ($a as $key => $value) { ?>
                        <option value=<?php echo $value?>><?php echo $value?></option>
                        
                        <?php } ?>

                    </select>

                    <input class="btn btn-primary" type="submit" value="Editar">
                </form>

            </div>

        </div>

    </div>

    
</body>
</html>