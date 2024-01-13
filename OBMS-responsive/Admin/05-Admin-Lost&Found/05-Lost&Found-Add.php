
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
                    <input type="text" class="form-control" name="bus_no" placeholder="Enter Bus Number">
                    </div>

                    </div>
                <!-- Driver's Name Container -->
                    <div class="col-12">
                    <label for="inputAddress" class="form-label">Driver's Name</label>
                    <input type="text" class="form-control" name="dName" placeholder="Enter Driver's Name">
                    </div>

                <!-- Conductor's Name Container -->
                    <div class="col-12">
                    <label for="inputAddress2" class="form-label">Conductor's Name</label>
                    <input type="text" class="form-control" name="cName" placeholder="Enter Conductor's Name">
                    </div>

                <!-- Item Name Container -->
                    <div class="col-12">
                    <label for="inputAddress2" class="form-label">Conductor's Name</label>
                    <input type="text" class="form-control" name="item" placeholder="Enter Item Desciption">
                    </div>

                <!-- Submit Button Container -->
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </form>  
    </body>
</html>


<?php
    include '../Connection.php';
    if(isset($_POST['submit']))
    {
        $bus_no = $_POST['bus_no'];
        $dname = $_POST['dName'];
        $cname = $_POST['cName'];
        $item = $_POST['item'];

        $insert = "INSERT INTO lost_tb (bus_no,drivers_name,conductors_name,item) VALUES ('$bus_no','$dname','$cname','$item')";

        $result = mysqli_query($conn,$insert);

        if($result)
        {
            header('location:05-Index.php');
        }

        else
        {
            echo 'Failed';
        }
    }
?>