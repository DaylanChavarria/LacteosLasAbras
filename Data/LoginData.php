<?php

error_reporting(1);
include_once 'Data.php';

class LoginData extends Data {

    public function isUser($id, $pass) {
        if ($id === "glosolanop@gmail.com" && $pass === "Samagoli12017") {
            return "3";
        } else {
            return "1";
        }
    }

}
