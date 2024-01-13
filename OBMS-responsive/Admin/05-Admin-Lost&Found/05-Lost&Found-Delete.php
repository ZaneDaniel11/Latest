<?php 

 include '../Connection.php';
 if(isset($_GET['deleteid']))
 {
    $id = $_GET['deleteid'];

    $deleteSql = "DELETE FROM lost_tb WHERE id = $id";

    $result = mysqli_query($conn,$deleteSql);

    if($result)
    {
        header('location:05-Index.php');
    }
    else
    {
        echo 'Delete Unsucesfull';
    }

 }
?>