<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lácteos las Abras</title>
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
        <script src="js/form.js" type="text/javascript"></script>
    </head>

    <body>

        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">

                <!-- left menu starts -->
                <?php include 'menuAdmin.php'; ?>
                <div id="content" class="col-lg-10 col-sm-10">
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="./administracion.php">Inicio</a>
                            </li>
                        </ul>
                    </div>
                    <h1>Bienvenido Administrador</h1>   
                </div>
<!--                <div id="content" class="col-lg-4 col-sm-4">
                    <?php
                    if (!isset($_SESSION['user'])) {
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Por favor escriba su correo y su contraseña</h3>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="../../Business/Ingreso/LoginBusinessAction.php">
                                    <div class="form-group">
                                        <input type="emailb" name="email" id="email" class="form-control input-sm" placeholder="Dirección de corrreo" value="abra">
                                    </div>
                                    <div class="form-group">
                                        <input type="passwordb" name="password" id="email" class="form-control input-sm" placeholder="Contraseña" value="cadabra">
                                    </div>
                                    <input type="submit" value="Ingresar" class="btn btn-info btn-block">
                                </form>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                           <h2>Bienvenido a panel de administración</h2>   
                           <a href="../../Business/Ingreso/LogoutAction.php">Salir</a>   
                        <?php
                    }
                    ?>
                </div>-->
            </div>
        </div>

    </body>
</html>
