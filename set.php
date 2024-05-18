<?php
session_start(); // Start or resume the session

$_SESSION["demo_study_set_created"] = "boi"; // Set session variable

echo "Session variable set."; // Output message
