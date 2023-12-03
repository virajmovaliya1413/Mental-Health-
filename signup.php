<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign-Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm" style="background-color: aqua !important;">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-blue navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-secondary" style="color: #11112e !important;"><img src="img/DE5.jpg" style="border-radius: 50%;width: 60px; height: 60px; margin-right: 30px;"></i>Mind & heart</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <!-- <a href="service.html" class="nav-item nav-link">Service</a> -->
                        <a href="price.html" class="nav-item nav-link">Events</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                            <div class="dropdown-menu m-0"style="background-color: aqua !important;">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <!-- <a href="detail.html" class="dropdown-item">Blog Detail</a> -->
                                <a href="team.html" class="dropdown-item">The Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="search.html" class="dropdown-item">Search</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid bg-light p-5">
        <div class="container">
            <div id="warn" role="alert"></div>
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Sign-Up</h5>
                <h1 class="display-6">Please Register Yourself To Connect With Mind & Heart</h1>
            </div>
            <div class="row justify-content-center position-relative" style="z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 mb-0">
                        <h1 class="display-6 mb-5" style="text-align:center;">Register</h1>
                        <form action="action.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" id="fullname" name="fullname" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" id="email" name="email" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="password" class="form-control bg-light border-0" id="pwd" name="pwd" placeholder="Password" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="tel" class="form-control bg-light border-0" id="phone" name="phone" pattern="[1-9]{1}[0-9]{9}" placeholder="+91"  style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="date" class="form-control bg-light border-0" id="date" name="date" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    Already Have Account???<a href="login.html" class="text-secondary">Login</a>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" id="submit" type="submit" name="signup">Sign-Up</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        let s=document.getElementById('submit')
        let warn=document.getElementById("warn"); 
        let fn = document.getElementById("fullname");
        let em = document.getElementById("email");
        let button1=document.getElementById('button1')
        button1.addEventListener('click',function(){
        sec.classList.remove("blur");
        popup.classList.remove("open-popup");
		location.href="signup.php"
    })

    </script>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">Make sure you regularly follow the instructions given by your counsellor. This is an <b>Important Note.</b></p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>1, Fintech Road, India</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>mindheart@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+91 1234567890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4" style="background-color:aqua !important;color: black !important;font-weight: bold;font-size: 20px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 text-center text-md-start">
                    <p class="mb-md-0" style="text-align:center;">&copy; <a class="text-primary" href="#" style="color: darkblue !important;">MIND & HEART</a>. All Rights Reserved.</p>
                </div>
                <!-- <div class="col-md-2 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php

//Connection 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "de_sem6";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
        //   echo "Hello ";  
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}


error_reporting(E_ALL);
//First query
if(isset($_POST['signup'])) 
{
        $Fullname = $_POST['fullname'];
        $emails    = $_POST['email'];
        $Pwd      = $_POST['pwd'];
        $Phone     = $_POST['phone'];
        $bdate     = $_POST['date'];
	if($Pwd!=$Cpwd)
	{
		echo '<script type="text/JavaScript">
  warn.className="alert alert-danger op";
  warn.innerHTML="PASSWORD AND CONFIRM PASSWORD DO NOT MATCH";
  ro.value="'.$Roles.'";
  fn.value="'. $Fullname .' ";
  em.value="'. $Email .' ";
  </script>';
	}
	else {
		try {
			$query1  =  "INSERT INTO signup VALUES('$Roles','$Fullname','$Email', '$Pwd')";
    		$data1   =  mysqli_query($conn,$query1);
		} catch (Exception $e) {
			echo '<script type="text/JavaScript">
			warn.className="alert alert-primary op";
			warn.innerHTML="USER ALREADY EXISTS";
			ro.value="'.$Roles.'";
			fn.value="'. $Fullname .' ";
			em.value="'. $Email .' ";
			</script>';
		}
    
    if($data1)
    {
        echo '<script type="text/JavaScript">
        sec.classList.add("blur");
        popup.classList.add("open-popup");
        
        
        // console.log(body)
        // location.href="signup2.html" 
        //    let z=confirm("Your details submitted suceesfully click ok if you want to redirect to login page")
        //    if(z){
        //     location.href="login.html"
        //    }
        //    else{
        //     location.href="signup.php"
        //    }
        </script>';
        
        // header('Location:signup2.html');
        // echo "welcome $Fullname";
    }
    
	}
}
?>