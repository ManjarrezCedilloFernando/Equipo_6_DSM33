<?php
session_start();
$connection = mysqli_connect("localhost","root","","profesores");

if(isset($_POST['registerbtn']))
{
    $id_laboratorio = $_POST['id_horario'];
    $grupo = $_POST['grupo'];
    $hora_i = $_POST['hora_i'];
    $hora_f = $_POST['hora_f'];
    $id_cuatrimestre = $_POST['id_cuatrimestre'];
    $id_materia = $_POST['id_materia'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    $confirmarcontraseña = $_POST['confirmacontra'];
    $clase = $_POST['clase'];

    $email_query = "SELECT * FROM horario WHERE correo='$correo' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "El grupo ya esta registrado. Por favor, intente con otro.";
        $_SESSION['status_code'] = "error";
        header('Location: tablaH.php');  
    }
    else
    {
        if($contraseña === $confirmarcontraseña)
        {
            $query = "INSERT INTO  horario (id_horario, grupo, hora_i, hora_f, id_cuatrimestre, id_materia ,contraseña ,correo,clase) 
            VALUES ('$id_horario', '$grupo', '$hora_i', '$hora_f','$id_cuatrimestre','$id_materia' ,'$contraseña' ,'$correo','$clase')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "El horario a sido agregado";
                $_SESSION['status_code'] = "success";
                header('Location: tablaH.php');
            }
            {
                $_SESSION['status'] = "El horario no se agrego";
                $_SESSION['status_code'] = "error";
                header('Location: tablaH.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "
            Contraseña y Confirmar contraseña no coinciden";
            $_SESSION['status_code'] = "warning";
            header('Location: tablaH.php');  
        }
    }

}

if(isset($_POST['updatebtn']))
{
    $Id_profesor = $_POST['edit_id_horario'];
    $nombre_p = $_POST['edit_grupo'];
    $correo = $_POST['edit_hora_i'];
    $grupo = $_POST['edit_hora_f'];
    $id_cuatrimestre = $_POST['edit_id_cuatrimestre'];
    $id_materia = $_POST['edit_id_materia'];
    $contraseña = $_POST['edit_contraseña'];
    $clase = $_POST['edit_contraseña'];
    $correo = $_POST['edit_correo'];
    $contraseña = $_POST['edit_clase'];

    $query = "UPDATE horario 
    SET id_horario='$id_horario',grupo='$grupo', hora_i='$hora_i'
    ,hora_f='$hora_f',id_materia='$id_materia',id_cuatrimestre='$id_cuatrimestre', contraseña='$contraseña', correo='$correo', clase='$clase' WHERE id_horario='$id_horario' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Tus datos están actualizados";
        $_SESSION['status_code'] = "success";
        header('Location: tablaH.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tus datos no estan actualizados";
        $_SESSION['status_code'] = "error";
        header('Location: tablaH.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $Id_profesor = $_POST['delete_id_horario'];

    $query = "DELETE FROM horario WHERE id_horario='$id_horario' ";
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


