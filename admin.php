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
    <section class="top">
        <div class="topContainer">
            <div class="profileImg">
                <img src="img/baby1.jpg">
            </div>
            <p>Saurav Ghimire</p>

            <div class="navbar">
                <ul>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Booking Detail</a></li>
                    <li><a href="#">Room Detail</a></li>
                    <li><a href="#">Account Status</a></li>
                </ul>
            </div>
        </div>


    </section>

    <div class="overview">
        <h3>Overview</h3>
        <div class="cardContainer">
            <div class="card" style="background-color:#0F1928; color:white">
                <i class="fas fa-users"></i>
                <h1>02</h1>


                <p>No of Booking</p>
            </div>

            <div class="card" style="background-color:#011936; color:white">
                <i class="fas fa-clipboard-list"></i>
                <h1>13</h1>
                <p>Total Room</p>
            </div>

            <div class="card" style="background-color:#0E6BA8; color:white">
                <i class="fas fa-check-square"></i>
                <h1>8</h1>
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
                        <td>$150</td>
                        <td>05</td>

                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Deluxe</td>
                        <td>$250</td>
                        <td>08</td>

                    </tr>

                    <tr>
                        <td>03</td>
                        <td>Luxury</td>
                        <td>$450</td>
                        <td>05</td>

                    </tr>

                    <tr>
                        <th>Total</td>
                        <td>-</td>
                        <td>-</td>

                        <td>18</td>
                    </tr>
                </table>
            </div>

            <div class="custList">
                <h3>Trusted Customers</h3>
                <table>
                    <tr>
                        <th>Customer Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Room Id</th>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Saurav</td>
                        <td>Ghimire</td>
                        <td>02</td>

                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Navid</td>
                        <td>Sherma</td>
                        <td>01</td>

                    </tr>

                    <tr>
                        <td>03</td>
                        <td>Ajey</td>
                        <td>Ghimire</td>
                        <td>03</td>

                    </tr>

            </div>
        </div>


    </div>
</body>

</html>
