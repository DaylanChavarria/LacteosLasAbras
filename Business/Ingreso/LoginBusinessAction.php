<?php
include './LoginBusiness.php';
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($_POST['email']) && isset($_POST['password'])) {
    if (strlen($email) > 0 && strlen($password) > 0) {
        $loginBusiness = new LoginBusiness();
        $result = $loginBusiness->isUser($email, $password);
        if ($result == 3) {
            session_start();
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $password;
            header("location: ../../Presentation/Admin/administracion.php?msg=Ingresado con exito");
        } else {
            header("location: ../../Presentation/Client/home.php?msg=no es usuario");
        }
    } else {
        header("location: ../../Presentation/Admin/administracion.php?msg=campos vacios");
    }
} else {
    header("location: ../../Presentation/Admin/administracion.php?msg=problema seguridad");
}
?>
