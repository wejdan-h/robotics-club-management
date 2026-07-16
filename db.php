<?php

// Database Connection

$host = "sql302.infinityfree.com";
$username = "if0_42426845";
$password = "bZ0trr40YSbjaa";
$database = "if0_42426845_robotics_club";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed");
}


// Add New Member

if (isset($_POST["add"])) {

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);

    $sql = "INSERT INTO members(name, age)
            VALUES('$name','$age')";

    mysqli_query($conn, $sql);

}


// Get Members

$result = mysqli_query($conn,"SELECT * FROM members ORDER BY id DESC");

?>