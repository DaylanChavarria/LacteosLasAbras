<?php

include './TitulosBusiness.php';

if (isset($_POST['langEs'])) {
     header("location: ../../Presentation/Client/home.php?lang=es");
       
} else if (isset($_POST['langEn'])) {
    header("location: ../../Presentation/Client/home.php?lang=en");
} 