<?php
  include '../Connection.php';
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
  <input type="text" class="form-control" name="bus_no"  placeholder="Enter Bus Number">
</div>

<!-- DEPARTURE TIME CLASS -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Departure Time</label>
  <input type="text" class="form-control" name="departure_time" placeholder="Enter time of Departure">
</div>

<!-- DESTINATION INPUT -->
<div class="col-12">
  <label for="inputAddress" class="form-label">Destination</label>
  <input type="text" class="form-control" name="destination"  placeholder="Enter Destination">
</div>

<!--TYPE OF UNIT -->
<div class="col-md-4">
  <label for="inputState" class="form-label">Unit</label>
  <select class="form-select" name="unit">
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
  if(isset($_POST['submit']))
  {
    $bus_no = $_POST['bus_no'];
    $departure_time = $_POST['departure_time'];
    $destination = $_POST['destination'];
    $unit = $_POST['unit'];

    $sql = "INSERT INTO arrival_tb (bus_no,unit,departured_time,route_destination) VALUES ('$bus_no','$unit','$departure_time','$destination')";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header('location:06-Index.php');

    }

  }
?>