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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/469fe33d6f.js" crossorigin="anonymous"></script>

</head>

<body>
    <section class="userNav">
        <div class="userType">
            <h3>User DashBoard</h3>
        </div>
    </section>

    <div class="navBar">
        <nav class="navs">
            <ul>
                <li><a href="userDashboard.php"><i class="fas fa-eye"></i>Overview</a></li>
                <li><a href="reviewPage.php" class="active"><i class="fas fa-pen"></i>Customer Review</a></li>
            </ul>
        </nav>
    </div>

    <section class="reviewPage">
        <div class="reviewAvatars">
            <h3>Leave Your Precious Feedback And Help Us Improve Ourselves.</h3>
            <img src="img/undraw_customer_survey_f9ur.svg">
        </div>
        <div class="reviewForms">
            <h3>Feedback & Complaint</h3>
            <form action="reviewPage.php" method="POST">
                <br>
                <input name="userName" type="text" placeholder="Your Name">
                <input name="userReviewEmail" type="email" placeholder="Your Email"><br>
                <input name="userReviewSubject" type="text" placeholder="Your Subject" style="width:530px;">
                <br>
                <textarea placeholder="Your Message" name="userReview"></textarea><br>
                <button type="submit" name="sendReview">Send</button>
            </form>
            <?php 
                include_once 'includes/dB.php';
                customerReview();
                
            ?>
        </div>
    </section>

</body>

</html>