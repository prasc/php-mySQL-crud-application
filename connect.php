<?php
$connection = mysqli_connect('localhost', 'root', '');

if (!$connection) {
    die("Database Connection Failed" . mysqli_error($connection));
}

$selectdb = mysqli_select_db($connection, 'test');

if (!$selectdb) {
    die("Database Connection Failed" . mysqli_error($connection));
}

?>