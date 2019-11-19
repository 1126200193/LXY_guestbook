<?php
define('_DBHOST_', 'localhost');
define('_DBUSER_', 'root');
define('_DBPASS_', '123456');
define('_DBNAME_', 'board');
$db = new mysqli(_DBHOST_, _DBUSER_, _DBPASS_, _DBNAME_);
if ($db->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}
