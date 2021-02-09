<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <title>Lista de Estudiantes</title>
</head>

<body>


    <div class="container">
        <?php
        include 'conexion.php';
        $filas = $conexion->query("select * from estudiantes");
        $conexion->close();
        ?>
        <div class="row mt-5">
            <div class="card w-100">
                <div class="card-header">
                    <h4 class="card-title">
                        Listado de Estudiantes
                        <a href="nuevo.php" class="btn btn-danger float-right"> Nuevo <i class="fas fa-clipboard"></i></a>
                    </h4>
                </div>

                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th>Acciones </th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha Nacimiento</th>
                            <th>Curso</th>
                            <th>Carrera</th>
                            <th>Jornada</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($filas as $fila) {
                            echo '
                               <tr>
                               <th scope="row">
                               <a href="editar.php?id=' . $fila['id'] . ' " class="btn btn-success">Modificar <i class="fas fa-book-open"></i>
                               <a href="eliminar.php?id=' . $fila['id'] . '&nombres=' . $fila['nombres'] . ' ' . $fila['apellidos'] . ' " class="btn btn-danger">Eliminar <i class="fas fa-trash-alt"></i> </a>
                               </th>
                               <td>' . $fila['nombres'] . '</td>
                               <td>' . $fila['apellidos'] . '</td>
                               <td>' . $fila['fechanac'] . '</td>
                               <td>' . $fila['curso'] . '</td>
                               <td>' . $fila['carrera'] . '</td>
                               <td>' . $fila['jornada'] . '</td>
                              
                           </tr>

                               ';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!--Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>