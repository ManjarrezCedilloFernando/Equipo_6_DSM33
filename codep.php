<?php
session_start();
$connection = mysqli_connect("localhost","root","","profesores");

if(isset($_POST['registerbtn']))
{
    $nombre_p = $_POST['nombre_p'];
    $correo = $_POST['correo'];
    $grupo = $_POST['grupo'];
    $clase = $_POST['clase'];
    $contraseña = $_POST['contraseña'];
    $confirmarcontraseña = $_POST['confirmacontra'];

    $email_query = "SELECT * FROM registroprofes WHERE correo='$correo' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Correo electrónico ya tomado. Por favor, intente con otro.";
        $_SESSION['status_code'] = "error";
        header('Location: tablap.php');  
    }
    else
    {
        if($contraseña === $confirmarcontraseña)
        {
            $query = "INSERT INTO registroprofes (nombre_p,correo,grupo,clase,contraseña) VALUES
             ('$nombre_p','$correo','$grupo','$clase','$contraseña')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Perfil de administrador agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tablap.php');
            }
            {
                $_SESSION['status'] = "El perfil se agrego";
                $_SESSION['status_code'] = "error";
                header('Location: tablap.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "
            Contraseña y Confirmar contraseña no coinciden";
            $_SESSION['status_code'] = "warning";
            header('Location: tablap.php');  
        }
    }

}

if(isset($_POST['updatebtn']))
{
    $Id_profesor = $_POST['edit_Id_profesor'];
    $nombre_p = $_POST['edit_nombre_p'];
    $correo = $_POST['edit_correo'];
    $grupo = $_POST['edit_grupo'];
    $clase = $_POST['edit_clase'];
    $contraseña = $_POST['edit_contraseña'];

    $query = "UPDATE registroprofes 
    SET nombre_p='$nombre_p', correo='$correo', grupo='$grupo', clase='$clase', contraseña='$contraseña' WHERE Id_profesor='$Id_profesor' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Tus datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tablap.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tablap.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $Id_profesor = $_POST['delete_Id_profesor'];

    $query = "DELETE FROM registroprofes WHERE Id_profesor='$Id_profesor' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: tablap.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: tablap.php'); 
    }    
}



?>


