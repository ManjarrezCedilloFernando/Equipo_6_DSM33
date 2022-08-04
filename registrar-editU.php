<?php
session_start();
include('includes/header.php');
include('includes/navbartable.php');
?>


<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Editar la informacion del laboratorio </h6>
    </div>
    <div class="card-body">
    <?php

    $connection = mysqli_connect("localhost","root","","profesores");

    if(isset($_POST['edit_btn']))
    {
        $id_laboratorio= $_POST['edit_matricula'];
        
        $query = "SELECT * FROM usuarios WHERE matricula='$matricula' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>



<form action="codeU.php" method="POST">

<input type="hidden" name="edit_matricula" value="<?php echo $row['matricula'] ?>">

<div class="form-group">
    <label> Matricula </label>
    <input type="number" name="edit_matricula" value="<?php echo $row['matricula'] ?>" class="form-control"
        placeholder="Ingrese la matricula del alumno">
</div>

<div class="form-group">
    <label>Nombre del alumno </label>
    <input type="text" name="edit_nombre_u" value="<?php echo $row['nombre_u'] ?>" class="form-control"
        placeholder="Ingrese el nombre del alumno">
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="email" name="edit_correo" value="<?php echo $row['correo'] ?>" class="form-control"
        placeholder="Ingrese su correo">
</div>
<div class="form-group">
    <label>Contraseña</label>
    <input type="password" name="edit_contraseña" value="<?php echo $row['contraseña'] ?>"
        class="form-control" placeholder="Ingrese su contreseña">
</div>
<div class="form-group">
        <label>Confirmar contraseña</label>
        <input type="password" name="confirmacontra" class="form-control" placeholder="Confirme la contraseña">
        </div>
<div class="form-group">
    <label> Grupo </label>
    <input type="text" name="grupo" value="<?php echo $row['grupo'] ?>" class="form-control"
        placeholder="Ingrese el nombre de el grupo">
<div class="form-group">
    <label> Id del cuatrimestre </label>
    <input type="number" name="edit_id_cuatrimestre" value="<?php echo $row['id_cuatrimestre'] ?>" class="form-control"
        placeholder="Ingrese el id del cuatrimestre">
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