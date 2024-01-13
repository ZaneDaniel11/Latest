<?php
    include("../sidevar.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Admin-CSS/style-busInformation.css">
</head>
<body>
    
<div class="tableContainer">
        <table class="table table-success table-striped">
            <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BUS NO.</th>
            <th scope="col">DEPARTURED</th>
            <th scope="col">DESTINATION</th>
            <th scope="col">SERVICE</th>
            <th scope="col">PASSENGER</th>
            <th scope="col">DRIVER'S NAME</th>
            <th scope="col">CONDOCTOR'S NAME</th>
            <th scope="col">Status</th>
            <th scope="col">Operation</th>
            
        </tr>
            </thead>
                <tbody>
              <?php
                    include('../Connection.php');
                    $sql = "SELECT *FROM departure_tb";
                    $result = mysqli_query($conn,$sql);
                    
                    if($result)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row['id'];
                            $bus_no = $row['bus_no'];
                            $time_dept = $row['time_dept'];
                            $route = $row['route_destination'];
                            $unit = $row['unit'];
                            $passenger = $row['passenger'];
                            $dName = $row['drivers_name'];
                            $cName = $row['conductors_name'];
                            $status = $row['status'];

                            echo
                            '
                            <tr>
                                 <th scope="row">'.$id.'</th>
                                 <td>'.$bus_no.'</td>
                                 <td>'.$time_dept.'</td>
                                 <td>'.$route.'</td>
                                 <td>'.$unit.'</td>
                                 <td>'.$passenger.'</td>
                                 <td>'.$dName.'</td>
                                 <td>'.$cName.'</td>
                                 <td>'.$status.'</td>
                                 <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Update Stat
                               </button></td>
                            </tr>
                            ';
                        }
                    }
              ?>
                </tbody>
        </table>
</div> 

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="" method="post">
          <label for="">Status</label> <br>
          <select class="form-select" aria-label="Default select example" name="status">
            <option>Departured</option>
            <optionS>Arrived</optionS>
          </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" name="Update-Status" class="btn btn-primary">Update Status</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<!--  -->