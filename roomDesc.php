<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Description | The Room</title>
    <script src="https://kit.fontawesome.com/469fe33d6f.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Raleway&family=Roboto&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Francois+One&family=Playfair+Display&family=Quicksand&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php include'includes/nav.php';?>

    <section class="DescContainer">

        <div class="description">
            <div class="descRoom">
                <h3>Enjoy the Good Room With Great View</h3>
                <p>We Provide You the Best Room For You in Affordable Price. 
                Unlike Others, we do not reduce the services with respective to our 
                prices. This Particular Room is the Cheapest Option of The Rest.

                    <br><br>You can Spend the Great Time with the best 
                    natural view while enjoying the Best Organic Food. 
                    By Booking this room you can have the great Experience
                     of all time.
                </p>
            </div>
            <div class="roomImgs">
                <img src="img/Room1.jpg">
            </div>
        </div>
    </section>

    <section class="serviceSection">
        <div class="services">
            <img src="img/computer.svg">
            <h3>Free TV</h3>
            <p>Rebroadcasting TV channels from any source satellites, air or cable networks for Movies and TV shows.</p>
        </div>

        <div class="services">
            <img src="img/wifi.svg">
            <h3>Free Wifi</h3>
            <p>Stay connected with us. Our free WiFi internet service is available 24-hours* in lobby, meeting room and guest rooms.</p>
        </div>

        <div class="services">
            <img src="img/map-location.svg">
            <h3>Convenent Location</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, aperiam?</p>
        </div>

        <div class="services">
            <img src="img/payment.svg">
            <h3>Budget Friendly</h3>
            <p>Budget prices vary depending on the season, destination, the amenities, the quality and the level of service.</p>
        </div>
    </section>

    <section class="BookingForm">
        <div class="formContainer">
            <form action="roomDesc.php" method="POST">
                <div class="formLabels">
                    <p>Check In </p>
                    <p style="margin-left:35px;">Check Out</p>
                </div>

                <input type="date" name="checkInDate">
                <input type="date" name="checkOutDate">
                <div class="formLabels">
                    <p>First Name</p>
                    <p>Last Name</p>
                </div>
                <input type="text" name="firstName">
                <input type="text" name="lastName">
                <div class="formLabels">
                    <p>Address</p>
                    <p style="margin-left:45px;">Phone Numer</p>
                </div>
                <input type="text" name="address">
                <input type="tel" name="phoneNo">
                <div class="formLabels">
                    <p>Email</p>
                    <p style="margin-left:60px;">No of People</p>
                </div>
                <input type="email" name="userEmail">
                <input type="number" name="noOfPeople">
                <br>
                <button type="submit" name="bookNow">Book Now</button>
            </form>

        </div>

        <div class="formCont">
            <h3>Expirience The Best room service in Affordable Price.</h3>
            <p>This hotel provides minimum amenities and services for a lower 
            price than a regular hotel in the area. This type of hotel provides 
            clean rooms that are safe and meet the basic needs of a guest.</p>
            <br><br>
            <span>Call: 0145454747</span>
            <br>
            <button onclick="window.location.href='room.php';">See Other Option</button>
        </div>



    </section>


    <?php
    include 'includes/footer.php';
    include 'includes/dB.php';
    ?>
</body>

</html>