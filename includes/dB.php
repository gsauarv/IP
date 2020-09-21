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
        $roomPrice  = $_POST['bookNow'];
        $roomConfId =rand(0,100);     
        if(empty($custFname) or empty($custAddress) or empty($custEmail) or empty($custPhone) or empty($noOfPeople) or empty($checkIn) or empty($checkOut) or  empty($roomConfId))
                {
                    echo '<script>alert("Please Fill Up the Full Form")</script>'; 

        }
        else
        {
            $stmt = $conn->prepare("INSERT INTO customers(custFname,custLname,custEmail,custAddress,custPhone,noOfCust,checkIn,checkOut,roomConfId,roomPrice) VALUES (?,?,?,?,?,?,?,?,?,?);");
            $stmt->bind_param("ssssssssss",$custFname,$custLname,$custEmail,$custAddress,$custPhone,$noOfPeople,$checkIn,$checkOut,$roomConfId,$roomPrice);
            $stmt->execute();
            $stmt->close();
            $tempPassword = rand(0,100);
            echo "<script>alert('Your Booking Has Been Registered.' + ' ' + ' UserName: '+'$custEmail' + ' Password: '+'$tempPassword')</script>";   
            $stmt = $conn->prepare("INSERT INTO users(userName,userPassword) VALUES (?,?);");
            $stmt->bind_param("ss",$custEmail,$tempPassword);
            $stmt->execute();
            $stmt->close();   
            

        }
      
    
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

// getRoomNo


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
// Customer Review
function customerReview()
{
    global $conn;
    if(isset($_POST['sendReview']))
    {
        $userId = $_POST['userName'];
        $userEmail = $_POST['userReviewEmail'];
        $subject  = $_POST['userReviewSubject'];
        $message = $_POST['userReview'];
        if(empty($userId) or empty($userEmail) or empty($subject) or empty($message))
        {
            echo '<script>alert("Feedback Sent Unsuccessfull Fill The Form Properly.")</script>'; 
        }
        else
        {
            $stmt = $conn->prepare("INSERT INTO customerReview(customerName,customerEmail,reviewSubject,reviewMessage) VALUES (?,?,?,?);");
            $stmt->bind_param("ssss",$userId,$userEmail,$subject,$message);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo '<script>alert("Feedback Sent successfully")</script>'; 

        }
    
    }
}

function helpText()
{
    global $conn;
    if(isset($_POST['helpButton']))   
    {
        $custSerText = $_POST['helpText'];
        if(empty($custSerText))
        {
            echo '<script>alert("Please Fill Up the Full Form")</script>'; 
        }
        else
        {
            $stmt = $conn->prepare("INSERT INTO helpDesk(helpText,helpEmail) VALUES (?,?);");
            $stmt->bind_param("ss",$custSerText,$_SESSION['userName']);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo '<script>alert("Feedback Sent successfully")</script>'; 
        }

    }
}

// Help Section
function gethelpText()
{
    global $conn;
    $query = "SELECT * FROM helpDesk;";
    $result = mysqli_query($conn,$query);
    echo "<table border= 1;width = 100%;><tr><th>Message</th><th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["helpText"]."</td><td>".$row["helpEmail"]."</td></tr>";

            
        }
        echo "</table>";
        mysqli_close($conn);
}

function getDatas()
{
    global $conn;
    $query = "SELECT * FROM customers;";
    $result = mysqli_query($conn,$query);
    if ($result->num_rows > 0) {
        echo "<table border= 1;width = 100%;><tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>CheckIn Date</th><th>CheckOut Date</th><th>No Of People</th><th>Room Id</th><th>Room Price</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["custId"]."</td><td>".$row["custFname"]."".$row["custLname"]."</td><td>".$row["custEmail"]."</td><td>".$row["custAddress"]."</td><td>".$row["checkIn"]."</td><td>".$row["checkOut"]."</td><td>".$row["noOfCust"]."</td><td>".$row["roomConfId"]."</td><td>".$row["roomPrice"]."</td></tr>";

            
        }
        echo "</table>";

    }
    else {
            echo "0 results";
        }
    mysqli_close($conn);
}

function changePassword()
{
    global $conn;
    
    if(isset($_POST['changePass']))
    {
        $oldPass = $_POST['oldPassword'];
        $newPass = $_POST['newPassword'];
        $repPass = $_POST['repeatPassword'];
        $query = "SELECT userPassword From users WHERE userName = 'admin';";
        $result = mysqli_query($conn,$query); 
     
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {
    
                $oldPass1 = $row['userPassword'];         
            }
            if ($oldPass = $oldPass1 and $newPass == $repPass){ 
                $query1 = "UPDATE users SET userPassword = '$newPass' WHERE userName = 'admin';";
                mysqli_query($conn,$query1);
                mysqli_close($conn);    
                echo '<script>alert("Password Change successfully")</script>';
                header("Location:admin.php");
           }
           else
           {
            echo '<script>alert("Password Change Unsuccessfull")</script>';
        }
        }      
        

       
    }

    
}


function getCustomerReview()
{
    global $conn;
    $query = "SELECT * FROM customerReview;";
    $result = mysqli_query($conn,$query);
    echo "<table border= 1;width = 100%;><tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["customerName"]."</td><td>".$row["customerEmail"]."</td><td>".$row["reviewSubject"]."</td><td>".$row["reviewMessage"]."</td></tr>";

            
        }
        echo "</table>";
        mysqli_close($conn);
}


?>