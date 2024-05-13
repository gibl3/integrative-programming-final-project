<?php

require_once 'db_conn.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fields = ['fname', 'lname', 'email', 'password', 'conf_password'];
    $form_data = array();
    foreach ($fields as $field) {
        $form_data[$field] = clean_input($_POST[$field] ?? '');
    }

    if (empty_form($form_data)) {
        $status = "error";
        $message = "All input fields are required";
        send_response($status, $message);
    }

    if (invalid_name($form_data['fname'])) {
        $status = "error";
        $message = "Invalid name";
        send_response($status, $message);
    }

    if (invalid_name($form_data['lname'])) {
        $status = "error";
        $message = "Invalid name";
        send_response($status, $message);
    }

    if (email_exist($conn, $form_data['email'])) {
        $status = "error";
        $message = "Email already exist";
        send_response($status, $message);
    }

    if (invalid_email($form_data['email'])) {
        $status = "error";
        $message = "Invalid email";
        send_response($status, $message);
    }

    if (!match_password($form_data['password'], $form_data['conf_password'])) {
        $status = "error";
        $message = "Passwords don't match";
        send_response($status, $message);
    }

    create_user($conn, $form_data);
} else {
    header("location: ../signup.php");
    echo "yeah";
}
