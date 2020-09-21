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
    <title>Admin DashBoard</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="https://kit.fontawesome.com/469fe33d6f.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="update">
        <div class="updateContainer">
            <h3>Change Password</h3>
            <form method="POST">
                <label>Old Password</label>
                <br>
                <input type="password" name="oldPassword"><br>
                <label>New Password</label>
                <br>
                <input type="password" name="newPassword">
                <br>
                <label>Repeat Password</label><br>
                <input type="password" name="repeatPassword">
                <br>

                <button type="submit" name="changePass">Update</button>

            </form>
            <?php 
                include_once 'includes/dB.php';
                changePassword();
            ?>
        </div>
    </section>
</body>

</html>