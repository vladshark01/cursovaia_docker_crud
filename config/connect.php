<?php
$connect = mysqli_connect('mysql', 'root', 'root', 'crud');

if (!$connect) {
    die ('Error connect to database!');
}