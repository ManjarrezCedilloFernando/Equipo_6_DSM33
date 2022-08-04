<?php
session_start();
include('includes/header.php');
include('includes/navbartable.php');
?>


<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Editar el perfil del encargado </h6>
    </div>
    <div class="card-body">
    <?php

    $connection = mysqli_connect("localhost","root","","profesores");

    if(isset($_POST['edit_btn']))
    {
        $id_encargado = $_POST['edit_id_encargado'];
        
        $query = "SELECT * FROM encargado WHERE id_encargado='$id_encargado' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>



<form action="codee.php" method="POST">

<input type="hidden" name="edit_id_encargado" value="<?php echo $row['id_encargado'] ?>">

<div class="form-group">
    <label> Nombre del encargado </label>
    <input type="text" name="nombre_e" value="<?php echo $row['nombre_e'] ?>" class="form-control"
        placeholder="Ingrese el Nombre">
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="email" name="correo" value="<?php echo $row['correo'] ?>" class="form-control"
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