<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="Table.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php
    include('sidevar.html');

    ?>

    <!-- View User Modal -->


    <div class="modal fade" id="viewusermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="view_user_data">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->


    <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="Code.php" method="post">

                        <div class="form-group">
                            <input type="hidden" class="form-control" id="user_id" placeholder="Bus Number">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputText1">Bus Number</label>
                            <input type="Text" class="form-control" id="bus_no" placeholder="Bus Number">
                        </div>

                        <div class="form-group">
                            <label for="">Departure Time</label>
                            <input type="Text" class="form-control" id="departure" placeholder="Departured Time">
                        </div>

                        <div class="form-group">
                            <label for="">Destination</label>
                            <input type="Text" class="form-control" id="destination" placeholder="Enter Destination">
                        </div>

                        <div class="form-group">
                            <label for="">Service</label>
                            <input type="Text" class="form-control" id="unit" placeholder="Please Enter the Unit">
                        </div>

                        <div class="form-group">
                            <label for="">Cor number</label>
                            <input type="Text" class="form-control" id="cor" placeholder="Please Enter COR number">
                        </div>

                        <div class="form-group">
                            <label for="">Pass Ticket</label>
                            <input type="Text" class="form-control" id="pass" placeholder="Please Enter Pass Ticket">
                        </div>

                        <div class="form-group">
                            <label for="">Bagg Ticket</label>
                            <input type="Text" class="form-control" id="bagg" placeholder="Please Enter Bagg Ticket">
                        </div>

                        <div class="form-group">
                            <label for="">Passenger</label>
                            <input type="Text" class="form-control" id="passenger" placeholder="passenger">
                        </div>

                        <div class="form-group">
                            <label for="">Driver's Name</label>
                            <input type="Text" class="form-control" id="dName" placeholder="Please Enter Driver's Name">
                        </div>

                        <div class="form-group">
                            <label for="">Conductor's Name</label>
                            <input type="Text" class="form-control" id="cName" placeholder="Please Enter Conductor's Name">
                        </div>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
                    </form>


                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->

    <form action="Code.php" method="post">
        <div class="Container" style="width: 100%; height:100%">
            <table class="rwd-table">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">BUS NO.</th>
                    <th scope="col" +>DEPARTURED</th>
                    <th scope="col">DESTINATION</th>
                    <th scope="col">SERVICE</th>
                    <th scope="col">NUMBER</th>
                    <th scope="col">PASS.TICKET</th>
                    <th scope="col">BAGG.TICKET</th>
                    <th scope="col">PASSENGER</th>
                    <th scope="col">NAME</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Date</th>
                    <th scope="col" colspan="2">OPERATION</th>

                </tr>
                <?php
                include("Connection.php");
                $sql = "SELECT *FROM main_tb";
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
                        $time = $row['date'];

                        echo
                        '
                                <tr>
                                <th class="bus_id">' . $id . '</th>
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
                                <td>' . $time . '</td>
                                <td><a href="#"class="view_data"><button class="Update_Button" role="button">View Data</button></a></td>
                                <td><a href="#" class="edit_data"><button class="Update_Button" role="button">Update</button></a></td>
                                <td><button class="Delete_Button" role="button" onclick="confirmDelete(' . $id . ')">Delete</button></td>
                                </tr>
                                
                               ';
                    }
                } else {
                    echo    "no result";
                }
                ?>
            </table>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- View Data -->
    <script>
        $(document).ready(function() {
            $('.view_data').click(function(e) {
                e.preventDefault();

                var user_id = $(this).closest('tr').find('.bus_id').text();

                console.log(user_id);

                $.ajax({
                    method: "post",
                    url: "Code.php",
                    data: {
                        'click_view_btn': true,
                        'user_id': user_id,
                    },

                    success: function(response) {
                       
                        $('#viewusermodal').modal('show');
                    }
                });

            });
        });
    </script>

    <!-- Edit Data -->
    <script>
        $(document).ready(function() {
            $('.edit_data').click(function(e) {
                e.preventDefault();

                var user_id = $(this).closest('tr').find('.bus_id').text();

                console.log(user_id);

                $.ajax({
                    method: "POST",
                    url: "Code.php",
                    data: {
                        'click_edit_btn': true,
                        'user_id': user_id,
                    },

                    success: function(response) {

                        // console.log(response);
                            $('#editData').modal('show');
                        $.each(response, function(key, value) {
                            //  console.log(value['bus_no']);
                            $('#user_id').val(value['id']);
                            $('#bus_no').val(value['bus_no']);
                            $('#departure').val(value['time_dept']);
                            $('#destination').val(value['route_destination']);
                            $('#unit').val(value['unit']);
                            $('#cor').val(value['cor_number']);
                            $('#pass').val(value['pass_ticket']);
                            $('#bagg').val(value['bagg_ticket']);
                            $('#passenger').val(value['passenger']);
                            $('#dName').val(value['drivers_name']);
                            $('#cName').val(value['conductors_name']);


                        });

                       
                    }
                });

            });
        });
    </script>
    <!-- Delete Function -->
    <script>
        function confirmDelete(id) {
            var isConfirmed = confirm('Are you sure you want to delete this record?');

            if (isConfirmed) {
                // Redirect to delete script with the record ID
                window.location.href = '01-History-Delete.php?delete_id=' + id;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>