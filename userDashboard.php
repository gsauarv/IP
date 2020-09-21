<?php 
    include 'includes/dB.php';
    userLogin();
    if(!isset($_SESSION['userName']))
    {
       
        header("Location:userLogin.php");
        exit();
        session_destroy();

    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User DashBoard | The Rest</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/469fe33d6f.js" crossorigin="anonymous"></script>


</head>

<body class="userBody">
    <section class="userNav">
        <div class="userType">
            <h3>User DashBoard</h3>
        </div>
    </section>

    <div class="navBar">
        <nav class="navs">
            <ul>
                <li><a href="userDashboard.php" class="active"><i class="fas fa-eye"></i>Overview</a></li>
                <li><a href="reviewPage.php"><i class="fas fa-pen"></i>Customer Review</a></li>
            </ul>
        </nav>
    </div>

    <div class="welcomeMessage">
        <h3>Welcome Back <?php echo $_SESSION['userName'];?> ,</h3>
        <h3>Here You Can Request Help or Give Some Customer Review that Will Help Us Improve Our Services.</h3>
    </div>
    <div class="mainDashBoard">
        <div class="dashboardContainer">


        </div>

        <div class="supportedBy">
            <h3>The Rest is supported By</h3>
            <div class="supportLogo">
                <img src="img/logo-visitnepal@2x.png">
                <img src="img/main_logo_han.png" style="margin-left: 20px;">
                <img src="img/nepal-tourism-board-logo.png">
                <img src="img/NepalAirlines.png">
                <img src="img/IFPRI-logo_Horizontal-e1527279071113.png">
            </div>
        </div>

    </div>

    <div class="customerReview">
        <h3>You Can Find Us On</h3>
        <div class="socialMedia">

            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <p>If You Need Any Help feel Free To contact us and we'll be happy to solve your Problems.</p>
        <div class="HelpForm">
            <form action="userDashboard.php" method="POST">
                <label>Share Your Problems</label><br>
                <textarea type="text" name="helpText" placeholder="Write Something."></textarea><br>
                <button name="helpButton" type="submit">Send Us</button>
            </form>
            <?php 
            
                include_once 'includes/dB.php';
                helpText()

            ?>
        </div>

        <h3>Or You can Call Our Help Desk</h3>
        <p><strong> The Rest</strong></p>
        <p><strong> Phone No:</strong> +977-014541412</p>
    </div>



</body>

</html>