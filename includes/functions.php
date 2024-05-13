<?php

function send_response($status, $message)
{
    header('Content-Type: application/json');
    echo json_encode(array(
        'status' => $status,
        'message' => $message
    ));
    exit();
}

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function invalid_name($name)
{
    return !preg_match("/^[a-zA-Z ]*$/", $name);
}

function empty_form($form_data)
{
    foreach ($form_data as $data) {
        if (empty($data)) {
            return true;
        }
    }
    return false;
}

function invalid_email($email)
{
    // if (preg_match("/^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i", $email));
    return !(preg_match('/\A[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}\z/', $email)
        && preg_match('/^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/', $email));
}

function email_exist($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $email_result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($email_result);
}

function match_password($password, $confirm_password)
{
    return ($password === $confirm_password) && (!empty($confirm_password) && !empty($confirm_password));
}

function create_user($conn, $form_data)
{
    $sql = "INSERT INTO users (fname, lname, email, password_hash) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $pass_hash = password_hash($form_data['password'], PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $form_data['fname'], $form_data['lname'], $form_data['email'], $pass_hash);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    send_response("success", "Account created successfully");
}

function user_login($conn, $form_data)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $form_data['email']);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if (password_verify($form_data['password'], $user['password_hash'])) {
        send_response("success", "Login successful");
    }
    send_response("error", "Invalid email or password");
}

function create_demo_study_set($conn, $name, $desc)
{
    $sql = "INSERT INTO demo_study_set (`name`, `desc`) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        send_response("error", "Something went wrong");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $desc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    send_response("success", "Study set created successfully");
}
