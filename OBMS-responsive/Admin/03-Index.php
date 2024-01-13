<?php
include("sidevar.php");
include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   

    <!-- Link your custom CSS file -->
    <link rel="stylesheet" href="03-Admin-Management/Style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update_modalLabel">Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="03-Admin-Management/Code.php" method="post">

                        <!-- ID -->

                        <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter Bus Number">
                    
                        <!-- Bus Number Container -->
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Bus Number</label>
                            <input type="text" class="form-control" id="bus_no" name="bus_no" placeholder="Enter Bus Number" >
                        </div>
                        <!-- Route Destination Container -->
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Route Destination</label>
                            <input type="text" class="form-control" id="route" name="route" placeholder="Route Destination" >
                        </div>
                        <!-- Unit Container -->
                        <label for="">Unit</label>
                        <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit" >
                        <!-- Cor Number Container -->
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">COR Number</label>
                            <input type="text" class="form-control" id="cor" name="cor" placeholder="Enter Bus Number" >
                        </div>
                        <!-- Pass Ticket -->
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Pass Ticket</label>
                            <input type="text" class="form-control" id="pass" name="pass" placeholder="Enter Bus Number" >
                        </div>
                        <!-- Bagg Ticket -->

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Bagg Ticket</label>
                            <input type="text" class="form-control" id="bagg" name="bagg" placeholder="Enter Bus Number" >
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Passenger</label>
                            <input type="text" class="form-control" id="passenger" name="passenger" placeholder="Enter Bus Number" >
                        </div>
                        <!-- Driver's Name Container -->
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Driver's Name</label>
                            <input type="text" class="form-control" id="dName" name="dName" placeholder="Enter Driver's Name" >
                        </div>
                        <!-- Conductor's Name Container -->
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Conductor's Name</label>
                            <input type="text" class="form-control" id="cName" name="cName" placeholder="Enter Conductor's Name">
                        </div>
                        <!-- Time Container -->
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Time Departured</label>
                            <input type="time" class="form-control" id="time" name="time" placeholder="Time Departured" >
                        </div>
                        <!-- Submit Button Container -->
                        <div class="modal-footer">
                            <div><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                            <div><button type="submit" name="update_btn" class="btn btn-primary">Update Data</button></div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container" style="margin-left: 200px">
        <h2 class="text-center mt-4 mb-4">Management</h2>
        <div class="tableContainer">
            <table class="table table-bordered table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">BUS NO.</th>
                        <th scope="col">DEPARTURED</th>
                        <th scope="col">DESTINATION</th>
                        <th scope="col">SERVICE</th>
                        <th scope="col">NUMBER</th>
                        <th scope="col">PASS.TICKET</th>
                        <th scope="col">BAGG.TICKET</th>
                        <th scope="col">PASSENGER</th>
                        <th scope="col">DRIVER'S</th>
                        <th scope="col">CONDUCTOR'S</th>
                        <th scope="col" colspan="3">OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM management_tb";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $bus_no = $row['bus_no'];
                            $time_dept = $row['time_dept'];
                            $route = $row['route_destination'];
                            $unit = $row['unit'];
                            $cor_number = $row['cor_number'];
                            $pass_ticket = $row['pass_ticket'];
                            $bagg_ticket = $row['bagg_ticket'];
                            $passenger = $row['passenger'];
                            $d_name = $row['drivers_name'];
                            $c_name = $row['conductors_name'];

                            echo
                            '
                                 <tr>
                                 <td class="bus_id" type="hidden">' . $id . '</td>
                                 <td>' . $bus_no . '</td>
                                 <td>' . $time_dept . '</td>
                                 <td>' . $route . '</td>
                                 <td>' . $unit . '</td>
                                 <td>' . $cor_number . '</td>
                                 <td>' . $pass_ticket . '</td>
                                 <td>' . $bagg_ticket . '</td>
                                 <td>' . $passenger . '</td>
                                 <td>' . $d_name . '</td>
                                 <td>' . $c_name . '</td>
                                 <td class="btn-container">
                                    <button type="button" class="btn btn-success"><a href="03-Admin-Management/Code.php?releaseid=' . $id . '">Release</a></button>
                                     <a href="#" class="btn btn-primary update_data">Update</a>
                                     <td><button class="btn btn-danger" role="button" onclick="confirmDelete(' . $id . ')">Delete</button></td>
                                 </td>
                                 </tr>
                                ';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).on('click', '.update_data', function (e) {
            e.preventDefault();

            var user_id = $(this).closest('tr').find('.bus_id').text();

            $.ajax({
                method: "post",
                url: "03-Admin-Management/Code.php",
                data: {
                    'click_update_btn': true,
                    'user_id': user_id,
                },
                success: function (response) {
                    $.each(response, function (key, value) {
                        $('#id').val(value['id']);
                        $('#bus_no').val(value['bus_no']);
                        $('#route').val(value['route_destination']);
                        $('#unit').val(value['unit']);
                        $('#cor').val(value['cor_number']);
                        $('#pass').val(value['pass_ticket']);
                        $('#bagg').val(value['bagg_ticket']);
                        $('#passenger').val(value['passenger']);
                        $('#dName').val(value['drivers_name']);
                        $('#cName').val(value['conductors_name']);
                        $('#time').val(value['time_dept']);
                    });
                    $('#update_modal').modal('show');
                }
            });
        });


        function confirmDelete(id) {
            var isConfirmed = confirm('Are you sure you want to delete this record?');

            if (isConfirmed) {
                // Redirect to delete script with the record ID
                window.location.href = '03-Admin-Management/Code.php?delete_id=' + id;
            }
        }
    </script>
</body>

</html>