<?php
    include("../sidevar.html");
    include_once '../Connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrival</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Admin-CSS/style-busInformation.css">

</head>
<body>
    
<div class="tableContainer">
    <button type="button" class="btn btn-primary"><a style="color: white; text-decoration:none;" href="06-Arrival-Add.php">Add</a></button>
        <table class="table table-success table-striped">
            <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BUS NO.</th>
            <th scope="col">SERVICE</th>
            <th scope="col">DEPARTURED</th>
            <th scope="col">Route Destination</th>
            <th scope="col">Operation</th>
            
        </tr>
            </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT *FROM arrival_tb";

                        $result = mysqli_query($conn,$sql);

                       while($row = mysqli_fetch_assoc($result)) {


                        $id = $row['id'];
                        $bus_no = $row['bus_no'];
                        $unit = $row['unit'];
                        $departure_time = $row['departured_time'];
                        $route = $row['route_destination'];

                        echo '
                        <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$bus_no.'</td>
                    <td>'.$unit.'</td>
                    <td>'.$departure_time.'</td>
                    <td>'.$route.'</td>
                    <td><button type="button" class="btn btn-success"><a href="06-Arrival-Update.php?editid='.$id.'">Edit</a></button>
                    <button type="button" class="btn btn-danger"><a href="06-Arrival-Delete.php?deleteid='.$id.'">Delete</a></button>
                    </td>
                    </tr>
                        ';

                       }
                    ?>
                    
                
                </tbody>
        </table>
</div> 


</body>
</html>