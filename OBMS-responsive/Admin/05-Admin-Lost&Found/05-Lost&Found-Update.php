<?php
include '../Connection.php';

$id = $_GET['editid'];
$sql = "SELECT *FROM lost_tb WHERE id = $id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$bus_no = $row['bus_no'];
$dName = $row['drivers_name'];
$cName = $row['conductors_name'];
$item = $row['item'];

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
                <!-- Bus Number Container -->
                    <div class="col-12">
                    <label for="inputAddress" class="form-label">Bus Number</label>
                    <input type="text" class="form-control" name="bus_no" placeholder="Enter Bus Number"  value=<?php echo $bus_no;?>>
                    </div>

                    </div>
                <!-- Driver's Name Container -->
                    <div class="col-12">
                    <label for="inputAddress" class="form-label">Driver's Name</label>
                    <input type="text" class="form-control" name="dName" placeholder="Enter Driver's Name" value=<?php echo $dName;?>>
                    </div>

                <!-- Conductor's Name Container -->
                    <div class="col-12">
                    <label for="inputAddress2" class="form-label">Conductor's Name</label>
                    <input type="text" class="form-control" name="cName" placeholder="Enter Conductor's Name" value=<?php echo $cName;?>>
                    </div>
 
                <!-- Item Name Container -->
                    <div class="col-12">
                    <label for="inputAddress2" class="form-label">Item</label>
                    <input type="text" class="form-control" name="item" placeholder="Enter Item Desciption" value=<?php echo $item;?>>
                    </div>

                <!-- Submit Button Container -->
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </form>  
    </body>
</html>

<?php

if(isset($_POST['submit']))
{
    $id = $_GET['editid'];
    $bus_no = $_POST['bus_no'];
    $dName = $_POST['dName'];
    $cName = $_POST['cName'];
    $item = $_POST['item'];

    $sql = "UPDATE lost_tb SET id = '$id', bus_no = '$bus_no', drivers_name = '$dName', conductors_name = '$cName', item = '$item' WHERE id ='$id'";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header('location:05-Index.php');
    }

}
?>