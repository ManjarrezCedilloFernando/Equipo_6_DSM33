<?php
session_start();
$connection = mysqli_connect("localhost","root","","profesores");

if(isset($_POST['registerbtn']))
{
    $matricula = $_POST['matriucla'];
    $nombre_u = $_POST['nombre_u'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarcontraseña = $_POST['confirmacontra'];
    $grupo = $_POST['grupo'];
    $id_cuatrimestre = $_POST['id_cuatrimestre'];

    $email_query = "SELECT * FROM usuarios WHERE correo='$correo' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Correo electrónico ya tomado. Por favor, intente con otro.";
        $_SESSION['status_code'] = "error";
        header('Location: tablaU.php');  
    }
    else
    {
        if($contraseña === $confirmarcontraseña)
        {
            $query = "INSERT INTO usuarios (matricula, nombre_u, correo, contraseña, grupo, id_cuatrimestre) VALUES
             ('$matricula', '$nombre_u', '$correo', '$contraseña', '$grupo', '$id_cuatrimestre')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Perfil de administrador agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tablaU.php');
            }
            {
                $_SESSION['status'] = "El perfil se agrego";
                $_SESSION['status_code'] = "error";
                header('Location: tablaU.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "
            Contraseña y Confirmar contraseña no coinciden";
            $_SESSION['status_code'] = "warning";
            header('Location: tablaU.php');  
        }
    }

}

if(isset($_POST['updatebtn']))
{
    $matricula = $_POST['edit_matriucla'];
    $nombre_u = $_POST['edit_nombre_u'];
    $correo = $_POST['edit_correo'];
    $contraseña = $_POST['edit_contraseña'];
    $confirmarcontraseña = $_POST['edit_confirmacontra'];
    $grupo = $_POST['edit_grupo'];
    $id_cuatrimestre = $_POST['edit_id_cuatrimestre'];


    $query = "UPDATE usuarios
    SET nombre_u='$nombre_u',correo='correo', contraseña='$contraseña',
    grupo='$grupo', id_cuatrimestre='$id_cuatrimestre' WHERE matricula='$matricula' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Tus datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tablaU.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tablaU.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $Id_profesor = $_POST['delete_matricula'];

    $query = "DELETE FROM usuarios WHERE matricula='$matricula' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: tablaU.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: tablaU.php'); 
    }    
}



?>


