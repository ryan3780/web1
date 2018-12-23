<?php

    include 'db_config.php';
 
 if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM record_work WHERE idx=$id");
    
}

$conn->close();


    echo "<script type='text/javascript'>history.back();</script>";


?>