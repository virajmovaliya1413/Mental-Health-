<?php
    //Connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "de_sem6";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn)
    {
              echo "Hello ";  
    }
    else
    {
        echo "Connection Failed".mysqli_connect_error();
    }


    error_reporting(E_ALL);
    //First query
    if(isset($_POST['signup'])) 
    {
        // $Roles    = $_POST['roles'];
        $Fullname = $_POST['fullname'];
        $emails    = $_POST['email'];
        $Pwd      = $_POST['pwd'];
        $Phone     = $_POST['phone'];
        $bdate     = $_POST['date'];
        // $Cpwd     = $_POST['cpwd'];

        $query1  =  "INSERT INTO register VALUES('$Fullname','$emails', '$Pwd', '$Phone', '$bdate')";
        $data1   =  mysqli_query($conn,$query1);
        if($data1)
        {
            //echo "welcome $Fullname";
            echo "<script>
            alert('Registered Successfully in the Mind & Heart!!!');
            window.location='login.html';
            </script>";
            // header('Location:login.html');
        }
        else
        {
            echo "<script>
            alert('Please Try Again Later');
            window.location='signup.html';
            </script>";
        }

    }

    //Second query
    if(isset($_POST['login'])) 
    {
        // $Role   = $_POST['role'];
        $NAME   = $_POST['NAME'];
        $EMAIL  = $_POST['EMAIL'];
        $PWD    = $_POST['PWD'];

        $query2  =  "SELECT * FROM register WHERE Fullname = '$NAME' and emails = '$EMAIL' and Pwd = '$PWD' ";
        $data2   =  mysqli_query($conn,$query2);
        $row = mysqli_fetch_array($data2,MYSQLI_ASSOC);
        
        $count = mysqli_num_rows($data2);
        
        if($count == 1)
        {
            session_start();
            $_SESSION['login_user'] = $EMAIL;
            echo "<script>
            alert('Welcome To Mind & Heart');
            window.location='index.html';
            </script>";
            // header('Location:appointment.html');
        }
        else
        {
            echo "<script>
            alert('Your Email Id/Password is Incorrect');
            window.location='login.html';
            </script>";
        }
    }

    //Third query
    if(isset($_POST['appoint'])) 
    {
        // $Role   = $_POST['role'];
        $DEPMT   = $_POST['dept'];
        $DOCT    = $_POST['doct'];
        $FNAME   = $_POST['fname'];
        $EMAILL  = $_POST['emaill'];
        $DATE    = $_POST['datee'];
        $TIME    = $_POST['timee'];

        $query4  =  "INSERT INTO appointment VALUES('$DEPMT','$DOCT','$FNAME', '$EMAILL', '$DATE', '$TIME')";
        $data4   =  mysqli_query($conn,$query4);
        if($data4)
        {
            //echo "welcome $Fullname";
            echo "<script>
            alert('Appointment Booked Successfully!!!');
            window.location='price.html';
            </script>";
            // header('Location:events.html');
        }
        else
        {
            echo "<script>
            alert('Please Try Again Later');
            window.location='appointment.html';
            </script>";
        }

    }



   

?>