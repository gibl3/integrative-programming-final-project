<?php

require_once 'db_conn.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fields = ['fname', 'lname', 'email', 'password', 'conf_password'];
    $form_data = array();
    foreach ($fields as $field) {
        $form_data[$field] = clean_input($_POST[$field] ?? '');
    }

    session_start();
    $_SESSION['form_data'] = $form_data;

    if (empty_form($form_data)) {
        header("location: ../signup.php?error=empty_form");
        exit();
    }

    if (invalid_name($form_data['fname'])) {
        header("location: ../signup.php?error=invalid_name");
        exit();
    }

    if (invalid_name($form_data['lname'])) {
        header("location: ../signup.php?error=invalid_name");
        exit();
    }

    if (email_exist($conn, $form_data['email'])) {
        header("location: ../signup.php?error=email_exist");
        exit();
    }

    if (invalid_email($form_data['email'])) {
        header("location: ../signup.php?error=invalid_email");
        exit();
    }

    if (!match_password($form_data['password'], $form_data['conf_password'])) {
        header("location: ../signup.php?error=password_dont_match");
        exit();
    }

    create_user($conn, $form_data);
} else {
    header("location: ../signup.php");
    echo "yeah";
}
