<?php
session_start();
$connection = mysqli_connect("localhost","root","","profesores");

if(isset($_POST['registerbtn']))
{
    $id_cuatrimestre = $_POST['id_cuatrimestre'];
    $nom_cuatri = $_POST['nom_cuatri'];


    $email_query = "SELECT * FROM cuatrimestre WHERE id_cuatrimestre='$id_cuatrimestre' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Este laboratorio ya fue registrado.";
        $_SESSION['status_code'] = "error";
        header('Location: tablaC.php');  
    }
    else
    {
          $query = "INSERT INTO cuatrimestre (id_cuatrimestre, nom_cuatri) VALUES
             ('$id_cuatrimestre','$nom_cuatri')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Perfil de encargado agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tablaC.php');
            }
            {
                $_SESSION['status'] = "El perfil no se agrego";
                $_SESSION['status_code'] = "error";
                header('Location: tablaC.php');  
            }
        }
}

if(isset($_POST['updatebtn']))
{
    $id_cuatrimestre = $_POST['edit_id_cuatrimestre'];
    $nom_cuatri = $_POST['edit_nom_cuatri'];


    $query = "UPDATE cuatrimestre
    SET nom_cuatri='$nom_cuatri',  WHERE id_cuatrimestre='$id_cuatrimestre' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Tus datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tablaC.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tablaC.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $id_encargado = $_POST['delete_id_cuatrimestre'];

    $query = "DELETE FROM cuatrimestre WHERE id_cuatrimestre='$id_cuatrimestre' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: tablaC.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: tablaC.php'); 
    }    
}



?>


