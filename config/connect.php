<?php
function connect() {

    if ($_SERVER['HTTP_HOST'] == 'localhost'){
        return new PDO(
            'mysql:host=localhost;dbname=abc','root','',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
}
?>