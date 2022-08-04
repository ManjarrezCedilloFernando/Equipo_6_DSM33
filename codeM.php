<?php
session_start();
$connection = mysqli_connect("localhost","root","","profesores");

if(isset($_POST['registerbtn']))
{
    $id_materia = $_POST['id_materia'];
    $nombre = $_POST['nombre'];
    $Id_profesor = $_POST['Id_profesor'];




    $text_query = "SELECT * FROM materia WHERE nombre='$nombre' ";
    $text_query_run = mysqli_query($connection, $text_query);
    if(mysqli_text_rows($text_query_run) > 0)
    {
        $_SESSION['status'] = "La materia ya fue registrada. Por favor, intente con otra.";
        $_SESSION['status_code'] = "error";
        header('Location: tablaM.php');  
    }
    else
    {

            $query = "INSERT INTO materia (id_materia, nombre, Id_profesor) 
            VALUES ('$id_materia', '$nombre', '$id_profesor')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Perfil de la materia agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tablaM.php');
            }
            {
                $_SESSION['status'] = "El perfil no se agrego";
                $_SESSION['status_code'] = "error";
                header('Location: tablaM.php');  
            }

    }

}

if(isset($_POST['updatebtn']))
{
    $id_laboratorio = $_POST['edit_id_materia'];
    $nom_l = $_POST['edit_nombre'];
    $no_laboratorio = $_POST['edit_Id_profesor'];


    $query = "UPDATE materia
    SET id_materia='$id_materia', nombre= '$nombre' Id_profesor='$Id_profesor' WHERE id_materia='$id_materia' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Los datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tablaM.php'); 
    }
    else
    {
        $_SESSION['status'] = "Los datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tablaM.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $Id_profesor = $_POST['delete_id_materia'];

    $query = "DELETE FROM materia WHERE id_materia='$id_laboratorio' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: tablaM.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: tablaM.php'); 
    }    
}



?>

