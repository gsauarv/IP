<?php 
    require 'includes/dB.php';
    userLogin();
    if(!isset($_SESSION['userName']))
    {
       
        header("Location:userLogin.php");
        exit();
        session_abort();


    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="https://kit.fontawesome.com/469fe33d6f.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php  include_once'includes/dB.php';?>
    <section class="top">
        <div class="topContainer">
            <div class="profileImg">
                <img src="img/baby1.jpg">
            </div>
            <p>Admin | The Rest</p>

            <div class="navbar">
                <ul>
                    <li><a href="admin.php">Overview</a></li>
                    <li><a href="details.php">Booking Detail</a></li>
                    <li><a href="customerReview.php">Customer Review</a></li>
                    <li><a href="help.php">Help Desk</a></li>
                    <li><a href="update.php">Change Password</a></li>
                </ul>
            </div>
        </div>


    </section>

    <div class="overview">
        <h3>Overview</h3>
        <div class="cardContainer">
            <div class="card" style="background-color:#0F1928; color:white">
                <i class="fas fa-users"></i>
                <h1><?php                   
                        $temp = NoofBookings();
                        echo $temp;
                    ?>
                </h1>
                <p>No of Booking</p>
            </div>

            <div class="card" style="background-color:#011936; color:white">
                <i class="fas fa-clipboard-list"></i>
                <h1><?php echo noOfRoom(); ?></h1>
                <p>Total Room</p>
            </div>

            <div class="card" style="background-color:#0E6BA8; color:white">
                <i class="fas fa-check-square"></i>
                <h1><?php echo 15-$temp; ?></h1>
                <p>Booked Room</p>
            </div>
        </div>


        <div class="detailedList">
            <div class="roomList">
                <h3>Room Overview</h3>
                <table>
                    <tr>
                        <th>Room Id</th>
                        <th>Room Type</th>
                        <th>No of Room</th>
                        <th>Room Price</th>

                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Normal</td>
                        <td>05</td>
                        <td>$150</td>

                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Deluxe</td>
                        <td>05</td>
                        <td>$250</td>

                    </tr>

                    <tr>
                        <td>03</td>
                        <td>Luxury</td>
                        <td>05</td>
                        <td>$450</td>

                    </tr>

                    <tr>
                        <th>Total</td>
                        <td>-</td>
                        <td>15</td>
                        <td>-</td>


                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>