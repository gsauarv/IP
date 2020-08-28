<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "therest";
$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
if(!$conn)
{
die("Connection Failed".mysqli_connect_error());
} 

function insertData(){
if(isset($_POST['bookNow']))
    {
        global $conn;
      
        $custFname = $_POST['firstName'];
        $custLname = $_POST['lastName'];
        $custAddress = $_POST['address'];
        $custEmail = $_POST['userEmail'];
        $custPhone = $_POST['phoneNo'];
        $noOfPeople = $_POST['noOfPeople'];
        $checkIn = $_POST['checkInDate'];
        $checkOut = $_POST['checkOutDate'];
        $roomConfId =rand();
        $stmt = $conn->prepare("INSERT INTO customers(custFname,custLname,custEmail,custAddress,custPhone,noofCust,checkIn,checkOut,roomConfId) VALUES (?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssssss",$custFname,$custLname,$custEmail,$custAddress,$custPhone,$noOfPeople,$checkIn,$checkOut,$roomConfId);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}

if(isset($_POST['bookNow']))
{
    insertData();   
}


function NoofBookings()
{
    global $conn;
    $query = "SELECT custId FROM customers;";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        $row = mysqli_num_rows($result);
        mysqli_free_result($result);
        
    }
    mysqli_close($conn);    
    return $row;
}

function noOfRoom()
{
   
    return  $noOfRoom = 15;
}

function userLogin()
{
    session_start();
    global $conn;
    if(isset($_POST['userSubmit']))
    {
        $username =$_POST['username'];
        $userpassword = $_POST['userPassword'];
        global $conn;
        $query = "SELECT userName,userPassword From users WHERE userName = '$username';";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
         {
             while($row = mysqli_fetch_array($result))
             {
                 $userName = $row['userName'];
                 $userPass = $row['userPassword'];
               
                        
            }
            mysqli_free_result($result);
            mysqli_close($conn);   
            if($userName == 'admin' and $userPass == $userpassword)
            {
                $_SESSION['userName'] = $username;
                header("Location:admin.php");
                
            }
            elseif($userName == $username and $userPass == $userpassword)
            {
                $_SESSION['userName'] = $username;
                header("Location:userDashboard.php");
            }

            else
            {
                echo "<br>"."<p style='color:white; padding-top:20px;'>Username or Password Don't Match</p>";
            }
             
         }    
    }   
    
   
}

function getUserName()
{
    global $userName;
    return $userName;
}
?>