<?php
session_start();
$connection = mysqli_connect("localhost","root","","profesores");

if(isset($_POST['registerbtn']))
{
    $nombre_e = $_POST['nombre_e'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarcontraseña = $_POST['confirmacontra'];

    $email_query = "SELECT * FROM encargado WHERE correo='$correo' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Correo electrónico ya tomado. Por favor, intente con otro.";
        $_SESSION['status_code'] = "error";
        header('Location: tablae.php');  
    }
    else
    {
        if($contraseña === $confirmarcontraseña)
        {
            $query = "INSERT INTO encargado (nombre_e,correo,contraseña) VALUES
             ('$nombre_e','$correo','$contraseña')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Perfil de encargado agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tablae.php');
            }
            {
                $_SESSION['status'] = "El perfil se agrego";
                $_SESSION['status_code'] = "error";
                header('Location: tablae.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "
            Contraseña y Confirmar contraseña no coinciden";
            $_SESSION['status_code'] = "warning";
            header('Location: tablae.php');  
        }
    }

}

if(isset($_POST['updatebtn']))
{
    $Id_profesor = $_POST['edit_id_encargado'];
    $nombre_e = $_POST['edit_nombre_e'];
    $correo = $_POST['edit_correo'];
    $contraseña = $_POST['edit_contraseña'];

    $query = "UPDATE encargado
    SET nombre_e='$nombre_e', correo='$correo', contraseña='$contraseña' WHERE id_encargado='$id_encargado' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Tus datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tablae.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tablae.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $id_encargado = $_POST['delete_id_encargado'];

    $query = "DELETE FROM encargado WHERE id_encargado='$id_encargado' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: tablae.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: tablae.php'); 
    }    
}



?>


