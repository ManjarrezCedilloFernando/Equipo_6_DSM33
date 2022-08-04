<?php
session_start();
$connection = mysqli_connect("localhost","root","","profesores");

if(isset($_POST['registerbtn']))
{
    $id_laboratorio = $_POST['id_laboratorio'];
    $nom_l = $_POST['nom_l'];
    $no_laboratorio = $_POST['no_laboratorio'];
    $id_encargado = $_POST['id_encargado'];
    $id_cuatrimestre = $_POST['id_cuatrimestre'];
    $id_horario = $_POST['id_horario'];
    $contraseña = $_POST['contraseña'];
    $confirmarcontraseña = $_POST['confirmacontra'];


    $email_query = "SELECT * FROM laboratorio WHERE correo='$correo' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "El laboratorio ya fue registrado. Por favor, intente con otro.";
        $_SESSION['status_code'] = "error";
        header('Location: tablaL.php');  
    }
    else
    {
        if($contraseña === $confirmarcontraseña)
        {
            $query = "INSERT INTO laboratorio (id_laboratorio, nom_l, no_laboratorio,id_encargado,id_cuatrimestre,id_horario, correo,contraseña) 
            VALUES ('$id_laboratorio', '$nom_l', '$no_laboratorio','$id_encargado','$id_cuatrimestre','$id_horario', '$correo','$contraseña')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Perfil de administrador agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tablaL.php');
            }
            {
                $_SESSION['status'] = "El perfil no se agrego";
                $_SESSION['status_code'] = "error";
                header('Location: tablaL.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "
            Contraseña y Confirmar contraseña no coinciden";
            $_SESSION['status_code'] = "warning";
            header('Location: tablaL.php');  
        }
    }

}

if(isset($_POST['updatebtn']))
{
    $id_laboratorio = $_POST['edit_id_laboratorio'];
    $nom_l = $_POST['edit_nom_l'];
    $no_laboratorio = $_POST['edit_no_laboratorio'];
    $id_encargado = $_POST['edit_id_encargado'];
    $id_cuatrimestre = $_POST['edit_id_cuatrimestre'];
    $id_horario = $_POST['edit_id_horario'];
    $correo = $_POST['edit_correo'];
    $contraseña = $_POST['edit_contraseña'];


    $query = "UPDATE laboratorio
    SET id_laboratorio ='$id_laboratorio', nom_l = '$nom_L' no_laboratorio='$no_laboratorio',id_encargado='$id_encargado',
    id_cuatrimestre='$id_cuatrimestre, id_horario='$id_horario',correo ='$correo' contraseña='$contraseña'  WHERE id_laboratorio='$id_laboratorio' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Tus datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tablaL.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tablaL.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $Id_profesor = $_POST['delete_id_laboratorio'];

    $query = "DELETE FROM laboratorio WHERE id_laboratorio='$id_laboratorio' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: tablaL.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: tablaL.php'); 
    }    
}



?>


