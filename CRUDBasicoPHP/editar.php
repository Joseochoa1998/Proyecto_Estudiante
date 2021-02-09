<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <title>Editar Información</title>
</head>

<body>
    <?php 
         include 'conexion.php';
         $id=$_GET['id'];
         $fila =$conexion->query("select * from estudiantes where id = $id");
         $fila=$fila->fetch_assoc();
    
    ?>

[]
    <div class="container">
        <div class="row mt-5">
            <div class="card w-100">
                <div class="card-header">
                    <h4 class="card-title">Editar Información de Estudiante</h4>
                </div>
                <div class="card-body">
                    <form action="actualizar.php" method="post">
                        <div class="row">

                            <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">

                            <div class="form-group col-4">
                                <label for="">Nombres:</label>
                                <input type="text" class="form-control" name="nombres"
                                    placeholder="Por favor escriba los nombres Completos" required value="<?php echo $fila['nombres']?>">
                            </div>
                            <div class="form-group col-4">
                                <label for="">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos"
                                    placeholder="Por favor escriba los apellidos Completos" required value="<?php echo $fila['apellidos']?>">
                            </div>
                            <div class="form-group col-4">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" name="fechanac" class="form-control" required value="<?php echo $fila['fechanac']?>">
                            </div>

                        </div>
                        
                            <div class="row mt-3">
                                <div class="form-group col-4">
                                    <label for="">Curso</label>
                                    <select name="curso" class="custom-select">
                                        <option value="Septimo" <?php $fila['curso']=='Septimo'?print'selected':'' ?> >Septimo</option>
                                        <option value="Octavo" <?php $fila['curso']=='Octavo'?print'selected':'' ?> >Octavo</option>
                                        <option value="Noveno" <?php $fila['curso']=='Noveno'?print'selected':'' ?> >Noveno</option>
                                        <option value="Decimo" <?php $fila['curso']=='Decimo'?print'selected':'' ?> >Decimo</option>
                                        <option value="Undecimo" <?php $fila['curso']=='Undecimo'?print'selected':'' ?> >Undecimo</option>
                                        <option value="Duodecimo" <?php $fila['curso']=='Duodecimo'?print'selected':'' ?> >Duodecimo</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for=""> Carrera: </label>
                                    <select name="carrera" class="custom-select" >
                                        <option value="Ciclo Comun" <?php $fila['carrera']=='Ciclo Comun'?print'selected':'' ?> >Ciclo Comun</option>
                                        <option value="Bach Humanidades" <?php $fila['carrera']=='Bach Humanidades'?print'selected':'' ?> >Bach Humanidades</option>
                                        <option value="Bach Informatica" <?php $fila['carrera']=='Bach Informatica'?print'selected':'' ?> >Bach Informatica</option>
                                        <option value="Bach Administracion" <?php $fila['carrera']=='Bach Administracion'?print'selected':'' ?> >Bach Administracion</option>
                                        <option value="Bach Confeccion" <?php $fila['carrera']=='Bach Confeccion'?print'selected':'' ?> >Bach Confeccion</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Jornada:</label>
                                    <select name="jornada" id="" class="custom-select">
                                        <option value="Matutina" <?php $fila['jornada']=='Matutina'?print'selected':'' ?> >Matutina</option>
                                        <option value="Vespertina" <?php $fila['jornada']=='Vespertina'?print'selected':'' ?> >Vespertina</option>
                                        <option value="Distancia" <?php $fila['jornada']=='Distancia'?print'selected':'' ?> >Distancia</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary" >Guardar <i class="fas fa-sd-card"></i> </button>
                                    <a href="index.php" class="btn btn-info" >Volver <i class="fas fa-undo-alt"></i> </a>
                                </div>
                            </div>
                        <?php $conexion->close(); ?>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>