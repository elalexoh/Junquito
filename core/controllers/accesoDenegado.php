<?php   
session_start();
if (!isset($_SESSION['user_id'])) {
    echo '<script>alert("Acceso Denegado")</script>';
    echo "<script>location.href='index.php'</script>";
}else{
    $user_id=$_SESSION['user_id'];
    $username=$_SESSION['user_name'];
    //$cedPaciente=$_Session['cedPaciente'];
    //echo $user_id;
}
?>