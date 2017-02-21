<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("location: ../../Presentation/Admin/administracion.php?msg=cerro sesion");
