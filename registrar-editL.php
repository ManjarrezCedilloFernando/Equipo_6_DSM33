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
        $id_laboratorio= $_POST['edit_id_laboratorio'];
        
        $query = "SELECT * FROM laboratorio WHERE id_laboratorio='$id_laboratorio' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>



<form action="codeL.php" method="POST">

<input type="hidden" name="edit_id_laboratorio" value="<?php echo $row['id_laboratorio'] ?>">

<div class="form-group">
    <label> Id del laboratorio </label>
    <input type="number" name="edit_id_laboratorio" value="<?php echo $row['id_laboratorio'] ?>" class="form-control"
        placeholder="Ingrese el id del laboratorio">
</div>

<div class="form-group">
    <label>Nombre del laboratorio</label>
    <input type="text" name="edit_nom_l" value="<?php echo $row['nom_l'] ?>" class="form-control"
        placeholder="Ingrese el nombre del laboratorio">
</div>
<div class="form-group">
    <label>Id del encargado</label>
    <input type="text" name="edit_id_encargado" value="<?php echo $row['id_encargado'] ?>" class="form-control"
        placeholder="Ingrese el id del encargado">
        </div> 
        <div class="form-group">
    <label>Id del horario</label>
    <input type="text" name="edit_id_horario" value="<?php echo $row['id_horario'] ?>" class="form-control"
        placeholder="Ingrese el id del horario">
        </div> 
        <div class="form-group">
    <label>Id del cuatrimestre</label>
    <input type="text" name="edit_id_cuatrimestre" value="<?php echo $row['id_cuatrimestre'] ?>" class="form-control"
        placeholder="Ingrese el id del cuatrimestre">
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