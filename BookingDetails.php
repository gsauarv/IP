<?php 
    include 'includes/dB.php';
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
    <title>Booking Details | The Rest</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/469fe33d6f.js" crossorigin="anonymous"></script>

</head>

<body>
    <section class="userNav">
        <div class="userType">
            <h3>User DashBoard</h3>
        </div>

        <div class="userDesc">
            <div class="userDis">
                <i class="far fa-user"></i>
                <h3><?php echo $_SESSION['userName'];?></h3>
            </div>
        </div>
    </section>

    <div class="navBar">
        <nav class="navs">
            <ul>
                <li><a href="userDashboard.php"><i class="fas fa-eye"></i>Overview</a></li>
                <li><a href="BookingDetails.php" class="active"><i class="fas fa-calendar-week"></i>Booking Details</a>
                </li>
                <li><a href="#"><i class="fas fa-file-invoice"></i>Bill Amounts</a></li>
                <li><a href="#"><i class="fas fa-pen"></i>Customer Review</a></li>
            </ul>
        </nav>
    </div>

    <section class="BookingDetails">
        <h3>Booking Details</h3>
        <div class="UserBookingDetails">
            <div class="BookingNames">
                <h4><strong>First Name:</strong> <br><br>Saurav</h4>
            </div>
            <div class="BookingNames">
                <h4><strong>LastName:</strong><br><br>Ghimire</h4>
            </div>
            <div class="BookingNames">
                <h4><strong>Room No: </strong><br><br>012</h4>
            </div>
        </div>
        <div class="bookingContainer">
            <div class="DetailsUsers">
                <label>Address</label>
                <p>Kathmandu Nepal</p>
            </div>

            <div class="DetailsUsers">
                <label>PhoneNo</label>
                <p>9818272144</p>
            </div>
            <div class="DetailsUsers">
                <label>Email Id</label>
                <p>gsaurav2000@gmail.com</p>
            </div>

            <div class="DetailsUsers">
                <label>Check-IN Date</label>
                <p>Kathmandu Nepal</p>
            </div>
            <div class="DetailsUsers">
                <label>Check-OUT Date</label>
                <p>Kathmandu Nepal</p>
            </div>

            <div class="DetailsUsers">
                <label>No Of People</label>
                <p>5</p>
            </div>
        </div>
    </section>
</body>

</html>