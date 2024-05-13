<?php

require_once 'db_conn.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_input($_POST['study_set_name']);
    $desc = clean_input($_POST['desc']);

    if (empty($name)) {
        $status = "error";
        $message = "Enter a study set name";
        send_response($status, $message);
    }

    create_demo_study_set($conn, $name, $desc);
} else {
    header("location: ../demo.php?yeahphp");
    echo "yeah";
}
