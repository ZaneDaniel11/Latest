<?php
include '../Connection.php';
$id = $_GET['updateid'];
$sql = "SELECT *FROM bus_stamby WHERE id='$id'";
$add = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($add);

$bus_no = $row['bus_no'];
$route = $row['route_destination'];
$unit = $row['unit'];
$cor = $row['cor_number'];
$dName = $row['drivers_name'];
$cName = $row['conductors_name'];
$time = $row['departure_time'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form class="row g-3" style="margin:15px;" method="post">
       
        <!-- Submit Button Container -->
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </div>
    </form> 
</body>
</html>
<?php

    
    if(isset($_POST['submit']))
    {
        $bus_no = $_POST['bus_no'];
        $route =$_POST['route'];
        $unit =$_POST['unit'];
        $cor=$_POST['cor'];
        $dName =$_POST['dName'];
        $cName =$_POST['cName'];
        $time =$_POST['time'];

        $query = "UPDATE bus_stamby SET id='$id',bus_no='$bus_no',route_destination='$route',unit='$unit',cor_number='$cor',drivers_name='$dName',conductors_name='$cName',departure_time
        ='$time' WHERE id='$id' ";

        $result = mysqli_query($conn,$query);

        if($result)
        {
            header('location:03-Index.php');
        }
        else 
        {
            echo 'woow';
        }
                

    }

?>