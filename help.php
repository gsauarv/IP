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
        <?php gethelpText()?>

    </div>
</body>

</html>