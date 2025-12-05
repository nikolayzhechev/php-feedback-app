<?php
define('servername', getenv('MYSQL_HOST'));
define('username', getenv('MYSQL_USER'));
define('password', getenv('MYSQL_PASSWORD'));
define('dbname', getenv('MYSQL_DATABASE'));

try {
    $conn = new mysqli(servername, username, password, dbname);
} catch (mysqli_sql_exception) {
    echo "Could not connect due to en error.";
    error_log("Database connection failed: ". mysqli_connect_error(), 3, '/var/www/html/logs/app.log');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

function destruct () {
    $conn->close();
}