<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'bank');

$connection = mysqli_connect (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($connection === false) {
    die("ERROR: Não pode conectar ao banco!".mysqli_connect_error());
}

?>