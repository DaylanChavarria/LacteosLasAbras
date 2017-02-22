<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("location: Presentation/Client/home.php?msg=no es usuario");
