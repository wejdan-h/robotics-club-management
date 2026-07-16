<?php

include "db.php";

if(isset($_POST["id"])){

    $id = $_POST["id"];

    mysqli_query($conn,
    "UPDATE members
     SET status = IF(status=1,0,1)
     WHERE id='$id'");

}

?>