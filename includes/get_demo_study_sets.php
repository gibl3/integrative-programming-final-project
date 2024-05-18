<?php

require_once 'db_conn.php';
require_once 'functions.php';

header('Content-Type: application/json');

$demo_study_sets = get_demo_study_set($conn);

echo json_encode($demo_study_sets); 
