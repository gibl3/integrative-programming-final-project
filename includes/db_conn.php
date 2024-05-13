<?php
$conn = mysqli_connect('localhost', 'root', '', 'donstudy_db');

if (!$conn) {
    die('Connection failed: '. mysqli_connect_error());
}