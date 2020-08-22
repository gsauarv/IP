<?php
if(isset($_POST['bookNow']))
    {
        $serverName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "therest";

        $conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
        if(!$conn)
        {
        die("Connection Failed".mysqli_connect_error());
        }

        $custFname = $_POST['firstName'];
        $custLname = $_POST['lastName'];
        $custAddress = $_POST['address'];
        $custEmail = $_POST['userEmail'];
        $custPhone = $_POST['phoneNo'];
        $noOfPeople = $_POST['noOfPeople'];
        $checkIn = $_POST['checkInDate'];
        $checkOut = $_POST['checkOutDate'];


        $stmt = $conn->prepare("INSERT INTO customers(custFname,custLname,custEmail,custAddress,custPhone,noofCust,checkIn,checkOut) VALUES (?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssssssss",$custFname,$custLname,$custEmail,$custAddress,$custPhone,$noOfPeople,$checkIn,$checkOut);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>