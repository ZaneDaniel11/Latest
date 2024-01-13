<?php
    include '../Connection.php';

    $id = $_GET['editid'];

    $sql = "SELECT *FROM arrival_tb";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $bus_no = $row['bus_no'];
    $unit = $row['unit'];
    $departure_time = $row['departured_time'];
    $route = $row['route_destination'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Add Arrivals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<form class="row g-3" method="post">

 <!-- BUS NUMBER CLASS -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Bus Number</label>
  <input type="text" class="form-control" name="bus_no"  placeholder="Enter Bus Number" value=<?php echo $bus_no ?>>
</div>

<!-- DEPARTURE TIME CLASS -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Departure Time</label>
  <input type="text" class="form-control" name="departure_time" placeholder="Enter time of Departure" value=<?php echo $departure_time ?>>
</div>

<!-- DESTINATION INPUT -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Destination</label>
  <input type="text" class="form-control" name="destination"  placeholder="Enter Destination" value=<?php echo $route ?>>
</div>

<!--TYPE OF UNIT -->
<div class="col-md-4">
  <label for="inputState" class="form-label">Unit</label>
  <select class="form-select" name="unit" value=<?php echo $unit ?>>
    <option selected>Unit</option>
    <option>Air Condation</option>
    <option>Not Air Condation</option>
  </select>
</div>

<!-- SUBMIT -->
<div class="col-12">
  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
</div>
</form>
</body>
</html>

<?php 
     $id = $_GET['editid'];
if(isset($_POST['submit']))
{
    $bus_no = $_POST['bus_no'];
    $departure_time = $_POST['departure_time'];
    $route = $_POST['destination'];
    $unit = $_POST['unit'];

    $sql = "UPDATE arrival_tb SET id = '$id', bus_no = '$bus_no', unit = '$unit', departured_time = '$departure_time', route_destination = '$route' WHERE id = $id ";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header('location:06-Index.php');
    }
}
?>