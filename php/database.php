<?php
$db_config['hostname'] = "localhost";
$db_config['username'] = "root";
$db_config['password'] = "";
$db_config['database'] = "tutorial_basic";

// Create connection
$db_conn = new mysqli($db_config['hostname'], $db_config['username'], $db_config['password'], $db_config['database']);

// Check connection
if ($db_conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}