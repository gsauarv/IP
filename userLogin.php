<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login | The Rest</title>
    <script src="https://kit.fontawesome.com/469fe33d6f.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Raleway&family=Roboto&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <section class="loginSection">
        <div class="loginContainer">
            <div class="loginBrand">
                <img src="img/abc.png">
            </div>

            <div class="loginForm">
                <form method="POST" action="userLogin.php">
                    <label>Username</label><br>
                    <input type="text" name="username"><br>
                    <label>Password</label><br>
                    <input type="password" name="userPassword">
                    <br><button type="submit" name="userSubmit">Login</button>
                    <?php 
                        include 'includes/dB.php';
                        userLogin();                        
                        ?>
                    
                </form>
            </div>

        </div>

    </section>
</body>

</html>