<?php
session_start();
include('includes/header.php');
include('includes/navbartable.php');
?>


<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Editar los horario </h6>
    </div>
    <div class="card-body">
    <?php

    $connection = mysqli_connect("localhost","root","","profesores");

    if(isset($_POST['edit_btn']))
    {
        $id_encargado = $_POST['edit_id_horario'];
        
        $query = "SELECT * FROM horario WHERE id_horario='$id_horario' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>



<form action="codeH.php" method="POST">

<input type="hidden" name="edit_id_horario" value="<?php echo $row['id_horario'] ?>">

<div class="form-group">
    <label> ID laboratorio </label>
    <input type="number" name="id_horario" value="<?php echo $row['id_horario'] ?>" class="form-control"
        placeholder="Ingrese el id del laboratorio">
</div>
<div class="form-group">
    <label> Grupo </label>
    <input type="text" name="grupo" value="<?php echo $row['grupo'] ?>" class="form-control"
        placeholder="Ingrese el nombre de el grupo">
</div>
<div class="form-group">
    <label> Hora de inicio </label>
    <input type="text" name="hora_i" value="<?php echo $row['hora_i'] ?>" class="form-control"
        placeholder="Ingrese la hora de inicio">
</div>
<div class="form-group">
    <label> Hora de fin </label>
    <input type="text" name="hora_f" value="<?php echo $row['hora_f'] ?>" class="form-control"
        placeholder="Ingrese el Nombre">
</div>
<div class="form-group">
    <label> Id del cuatrimestre </label>
    <input type="text" name="id_cuatrimestre" class="form-control" placeholder="Ingrese el id del cuatrimestre que cursa">
    </div>

    <div class="form-group">
    <label> Id de la materia</label>
    <input type="text" name="id_materia" class="form-control" placeholder="Introduzca el id de la materia que cursa">
    </div>
<div class="form-group">
    <label>Contraseña</label>
    <input type="password" name="edit_contraseña" value="<?php echo $row['contraseña'] ?>"
        class="form-control" placeholder="Ingrese su contreseña">
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="email" name="correo" value="<?php echo $row['correo'] ?>" class="form-control"
        placeholder="Ingrese su correo">
</div>
<div class="form-group">
            <label>Confirmar contraseña</label>
                <input type="password" name="confirmacontra" class="form-control" placeholder="Confirme la contraseña">
            </div>
<div class="form-group">
                <label>Clase</label>
                <input type="text" name="clase" class="form-control" placeholder="Introduzca la clase que se esta tomando">
                </div>
</div>
<a href="register.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

</form>
<?php
    }
}

?>  

</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scriptstable.php');
include('includes/footertable.php');
?>