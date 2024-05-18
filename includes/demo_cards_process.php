<?php

require_once 'db_conn.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get JSON data from the request body
    $json = file_get_contents('php://input');

    // Decode JSON data to PHP array
    $dataArray = json_decode($json, true);

    // Check if JSON decoding was successful
    if ($dataArray === null && json_last_error() !== JSON_ERROR_NONE) {
        die("Error decoding JSON data: " . json_last_error_msg());
    }

    // Access array elements and object properties
    foreach ($dataArray as $obj) {
        $question = $obj['question'];
        $answer = $obj['answer'];

        create_demo_cards($conn, $question, $answer);
    }

    send_response("success", "Cards successfully created");
} else {
    header("location: ../demo.php?yeahphp");
    echo "yeah";
}
