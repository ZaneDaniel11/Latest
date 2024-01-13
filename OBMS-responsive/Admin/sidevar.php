<header>
    <nav>
        <ul>
            <li><a class="navbar-link" href="01Index.php">History</a></li>
            <li><a class="navbar-link" href="02-Index.php">Stanby Busses</a></li>
            <li><a class="navbar-link" href="03-Index.php">Management</a></li>
            <li><a class="navbar-link" href="4Admin-departure.php">Departure</a></li>
            <li><a class="navbar-link" href="5Admin-addItem.php">Lost and Found</a></li>
            <li><a class="navbar-link" href="6Admin-arrival.php">Arrival</a></li>
            <li><a class="navbar-link" href="Admin-busInformation.php">Bus Information</a></li>
        </ul>
    </nav>

    
    <div class="image-container">
        <img src="admin-pictures/1-admin.png" alt="">
    </div>
</header>

<style>
    .image-container
    {
        position: absolute;
        width: 100px;
        top: 0;
        margin-left: 50px;
        margin-top: 20px;
    }

    .image-container img 
    {
        width: 100%;
        height: 100%;
      

    }
    header
    {
        position: relative;
        position: fixed;
        width: 200;
        background-color: #48B03E;
        left: 0;
        top: 0;
        bottom: 0;
        
        
    }
    
    nav
    {   
        padding-top: 150px;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    .navbar-link
    {
        text-decoration: none;
        color: black;
    }
    ul
    {
        
        display: flex;
        flex-direction: column;
    }
    ul li
    {
        margin: 15px;
        list-style-type: none;
    }
</style>