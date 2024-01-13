<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tittle -->
    <title>Online Bus Management System</title>
    <link rel="stylesheet" href="../User/CSS/STYLE-index.css">
    <!-- Font Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Inter:wght@500;600;
                700&family=Kaushan+Script&family=Montserrat&family=Roboto+Slab&family=Roboto:wght@300&display=swap" 
                rel="stylesheet">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Java Script -->
    <script src="JavaScript/01-Index-Table.js"></script>

     <!-- Link to Style -->
     
</head>

       

<body>
    <!-- Header -->
    <?php
         include 'header.html'
    ?>

    <!-- picture Container -->
    <div class="bodypic">
        <img src="imgaes/bodyPicture1.png">
    </div>

    <div class="section2">
        <p class="p1">SCHEDULE</p>
        <p class="p2">Stay inform with  bus schedule with real-time updates.</p>
    </div>

    <div class="section3">
        <p class="p3">Live Bus Travel Information</p>
    </div>

    <div class="tablecontianer">

        
        <div class="tableButtonContainer">
            <div class="stambyButtonContainer">
                <button id="stambyBtn" class="stambyBtn">BUS STAMBY</button>
            </div>

            <div class="arrivalButtonContainer">
                <button class="arrivalBtn" id="arrivalBtn">ARRIVALS</button>
            </div>

            <div class="departureButtonContainer">
                <button class="departureBtn" id="departureBtn">DEPARTURES</button>
            </div>
        </div>

                        <!-- Table Container -->
            <div class="tableContainer" style="width: 100%;
                border-radius: 20px;
                background: #FFF;
                border-color: #000;
                margin-left: 55px;
                margin-right: 55px;    
">
                <?php 
                    include 'Table/TABLE-busStamby.php';
                ?>
            </div>
                        <!-- Table Container End -->

                    <!-- Show More Button -->
        <div class="loadToggleContainer">
           <div><button id="showMoreBtn">Show More</button></div>
        </div>
                    <!-- Show More Button End -->

    </div>

    
    
</body>
</html>


