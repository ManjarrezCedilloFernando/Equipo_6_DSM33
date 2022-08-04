<?php
session_start();
include('includes/header.php');
include('includes/navbartable.php');



?>


 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>
        
       
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">


    <?php
 include('includes/usuarios-registro.php');
 ?>

 <?php
if(isset($_SESSION['success'])&& $_SESSION['success']!='')
{
    echo '<h2>  ' .$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
}
if(isset($_SESSION['status'])&& $_SESSION['status']!='')
{
    echo '<h2 class="bg-info">  ' .$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}
 ?>
    
        <div class="table-responsive">


        <?php
        $connection = mysqli_connect("localhost","root","","profesores");
                $query = "SELECT * FROM usuarios";
                $query_run = mysqli_query($connection, $query);
            ?>


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nombre del alumno</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Grupo</th>
                        <th>Id del cuatrimestre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tfoot>
                <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['matricula']; ?></td>
                                <td><?php  echo $row['nombre_u']; ?></td>
                                <td><?php  echo $row['correo']; ?></td>
                                <td><?php  echo $row['contraseña']; ?></td>
                                <td><?php  echo $row['grupo']; ?></td>
                                <td><?php  echo $row['id_cuatrimestre']; ?></td>


                                
                                <td>
                                    <form action="registrar_editU.php" method="post">
                                        <input type="hidden" name="edit_matricula" value="<?php echo $row['matricula']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="codepU.php" method="post">
                                        <input type="hidden" name="delete_matricula" value="<?php echo $row['matricula']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tfoot>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php
include('includes/scriptstable.php');
include('includes/footertable.php');
?>