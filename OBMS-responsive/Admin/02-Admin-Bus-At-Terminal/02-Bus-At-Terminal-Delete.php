<?php
    include '../Connection.php';
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];

        $query = "DELETE FROM bus_stamby WHERE id = $id";

        $result = mysqli_query($conn,$query);
        
        if($result)
        {
           header('location:02-Index.php');
        }
    }
?>