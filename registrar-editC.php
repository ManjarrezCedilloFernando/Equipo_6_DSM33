<?php
session_start();
include('includes/header.php');
include('includes/navbartable.php');
?>


<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Editar la informacion del cuatrimestre </h6>
    </div>
    <div class="card-body">
    <?php

    $connection = mysqli_connect("localhost","root","","profesores");

    if(isset($_POST['edit_btn']))
    {
        $id_cuatrimestre= $_POST['edit_id_cuatrimestre'];
        
        $query = "SELECT * FROM cuatrimestre WHERE id_cuatrimestre='$id_cuatrimestre' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>



<form action="codeC.php" method="POST">

<input type="hidden" name="edit_id_cuatrimestre" value="<?php echo $row['id_cuatrimestre'] ?>">

<div class="form-group">
    <label> Id del cuatrimestre </label>
    <input type="number" name="edit_id_cuatrimestre" value="<?php echo $row['id_cuatrimestre'] ?>" class="form-control"
        placeholder="Ingrese el id del cuatrimestre">
</div>

<div class="form-group">
    <label>Nombre del cuatrimestre</label>
    <input type="text" name="edit_nom_cuatri" value="<?php echo $row['nom_cuatri'] ?>" class="form-control"
        placeholder="Ingrese el nombre del cuatrimestre">
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