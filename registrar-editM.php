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
        $id_laboratorio= $_POST['edit_id_materia'];
        
        $query = "SELECT * FROM materia WHERE id_materia='$id_materia' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>



<form action="codeM.php" method="POST">

<input type="hidden" name="edit_id_materia" value="<?php echo $row['id_materia'] ?>">


<div class="form-group">
    <label> Id de la materia </label>
    <input type="number" name="edit_id_materia" value="<?php echo $row['id_materia'] ?>" class="form-control"
        placeholder="Ingrese el id de la materia">
</div>

<div class="form-group">
    <label> Nombre de la materia </label>
    <input type="text" name="edit_nombre" value="<?php echo $row['nombre'] ?>" class="form-control"
        placeholder="Ingrese la matricula del alumno">
</div>

<div class="form-group">
    <label>Id del profesor </label>
    <input type="numbre" name="edit_Id_profesor" value="<?php echo $row['id_profesor'] ?>" class="form-control"
        placeholder="Ingrese el ID del profesor">
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