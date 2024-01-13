<?php 
 include '../Connection.php';
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM arrival_tb WHERE id = $id";
    
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header('location:06-Index.php');
    }
}

?>