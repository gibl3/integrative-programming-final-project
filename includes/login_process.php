<?php

require_once 'db_conn.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);

    $form_data = [
        'email' => $email,
        'password' => $password
    ];

    if (empty_form($form_data)) {
        $status = "error";
        $message = "All input fields are required";
        send_response($status, $message);
    }

    if (invalid_email($form_data['email'])) {
        $status = "error";
        $message = "Invalid email";
        send_response($status, $message);
    }

    if (!email_exist($conn, $form_data['email'])) {
        $status = "error";
        $message = "Invalid email or password";
        send_response($status, $message);
    }

    $user = user_login($conn, $form_data);

    session_start();
    $_SESSION["user"] = $user;
} else {
    header("location: 404.php");
}
