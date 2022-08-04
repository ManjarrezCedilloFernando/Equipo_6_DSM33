<?php
session_start();
include('includes/header.php');
include('includes/navbartable.php');
?>


<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Editar el perfil del profesor </h6>
    </div>
    <div class="card-body">
    <?php

    $connection = mysqli_connect("localhost","root","","profesores");

    if(isset($_POST['edit_btn']))
    {
        $Id_profesor = $_POST['edit_Id_profesor'];
        
        $query = "SELECT * FROM registroprofes WHERE Id_profesor='$Id_profesor' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>



<form action="codep.php" method="POST">

<input type="hidden" name="edit_Id_profesor" value="<?php echo $row['Id_profesor'] ?>">

<div class="form-group">
    <label> Nombre del profesor </label>
    <input type="text" name="edit_nombre_p" value="<?php echo $row['nombre_p'] ?>" class="form-control"
        placeholder="Ingrese el Nombre">
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="email" name="edit_correo" value="<?php echo $row['correo'] ?>" class="form-control"
        placeholder="Ingrese su correo">
</div>
<div class="form-group">
    <label>Grupo</label>
    <input type="text" name="edit_grupo" value="<?php echo $row['grupo'] ?>" class="form-control"
        placeholder="Ingrese su grupo">
</div>
<div class="form-group">
    <label>Clase</label>
    <input type="text" name="edit_clase" value="<?php echo $row['clase'] ?>" class="form-control"
        placeholder="Ingrese la clase que da">
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