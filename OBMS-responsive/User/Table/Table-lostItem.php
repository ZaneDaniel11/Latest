<style>
        .claim-status {
            color: white;
            font-weight: bold;
            padding: 8px;
            border-radius: 5px;
        }

        .claim-status-claim {
            background-color: green;
            color: white;
            font-family: 'Roboto';
            border-radius: 10px;
            align-items: center;
            text-align: center;
        }

        .claim-status-unclaim {
            background-color: red;
            color: white;
            border-radius: 10px;
            text-align: center;
        }
    </style>

<table>
            <thead>
        <tr>
            <th scope="col">BUS NO.</th>
            <th scope="col">DRIVERS NAME</th>
            <th scope="col">CONDUCTORS NAME</th>
            <th scope="col">ITEM DESCRIPTION</th>
            <th scope="col">DATE LOST</th>
            <th scope="col">STATUS</th>
        </tr>
            </thead>
                <tbody>
                    <?php 
                    include 'TABLE-Connection.php';
                        $sql = "SELECT *FROM lost_tb";

                        $result = mysqli_query($conn,$sql);

                       while($row = mysqli_fetch_assoc($result)) {

                        $statusClass = ($row['status'] == 'claim') ? 'claim-status-claim' : 'claim-status-unclaim';
                        
                        $bus_no = $row['bus_no'];
                        $dname = $row['drivers_name'];
                        $cname = $row['conductors_name'];
                        $item = $row['item'];
                        $date = $row['date'];

                        echo '
                        <tr>
                    
                    <td>'.$bus_no.'</td>
                    <td>'.$dname.'</td>
                    <td>'.$cname.'</td>
                    <td>'.$item.'</td>
                    <td>'.$date.'</td>
                    <td class="' . $statusClass . '">' . $row['status'] . '</td>
                    
                    </tr>
                        ';

                       }
                    ?>
                    
                
                </tbody>
</table>
