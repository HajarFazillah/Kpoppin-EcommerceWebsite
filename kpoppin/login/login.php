<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<html lang="en">
	<head>
		<title>Kpoppin: User Login</title>
		<meta charset="UTF-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../pics/icon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="../css/nav.css">
		<link rel="stylesheet" type="text/css" href="../login/index.css">
		<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	</head>
	<body>
	<div class="mainnav">
		<a href="http://localhost/kpoppin/home.html">Home</a>
		<a href="http://localhost/kpoppin/login/login.php">My Account</a>
		<a href="http://localhost/kpoppin/cart.php">My Cart</a>
		<a href="http://localhost/kpoppin/cc.html">Customer Centre</a>
	<div class="search-container">
		<form action="/action_page.php">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit">Search</button>
		</form>
	</div>
    </div>
        <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>
		<br>
        <a href="http://localhost/kpoppin/home.html"><img src="../pics/logo.png" class="logo" style="width: 40%; height: 30%"></a>
		<br>
        <div class="navbar">
            <div class="containBox">
                <div class="dropdown"> 
                   <button class="dropbtn"><a href="http://localhost/kpoppin/albums.php">Albums</a></button>
                </div> 
                <div class="dropdown"> 
                    <button class="dropbtn">Star Collectables &#9662;</button> 
                    <div class="dropdown-content"> 
                        <a href="http://localhost/kpoppin/star1.php">Photocards & Posters&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
                        <a href="http://localhost/kpoppin/star2.php">Photobook</a>
                    </div>
                </div> 
                <div class="dropdown"> 
                    <button class="dropbtn"><a href="http://localhost/kpoppin/merch.php">Merchandise</a></button>
                </div>
                <div class="dropdown"> 
                    <button class="dropbtn">Artist &#9662;</button> 
                    <div class="dropdown-content"> 
                        <a href="http://localhost/kpoppin/blackpink.php">BLACKPINK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<a href="http://localhost/kpoppin/bts.php">BTS</a>
						<a href="http://localhost/kpoppin/mamamoo.php">MAMAMOO</a> 
						<a href="http://localhost/kpoppin/nct.php">NCT</a>
						<a href="http://localhost/kpoppin/exo.php">EXO</a>
						<a href="http://localhost/kpoppin/redvelvet.php">Red Velvet</a>
						<a href="http://localhost/kpoppin/suju.php">Super Junior</a>
						<a href="http://localhost/kpoppin/2ne1.php">2NE1</a>
						<a href="http://localhost/kpoppin/everglow.php">Everglow</a>
                    </div>
                </div>  
                <div class="dropdown"> 
                    <button class="dropbtn"><a>Fansite &#9662;</a></button>
					<div class="dropdown-content"> 
                        <a href="http://localhost/kpoppin/bpfansite.html">BLACKPINK Fansite &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a href="http://localhost/kpoppin/btsfansite.html">BTS Fansite</a>
                    </div>
                </div> 
            </div> 
        </div>
    <script type="text/javascript">
        mybutton = document.getElementById("topBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } 
            else {
                mybutton.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
	
	<br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
	<br><br><br>
	
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="login-box"> 
			<br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>	
			<br><br><br><br><br><br><br>	
			<br><br><br><br><br><br><br>
			<h1>User Login</h1> 
			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="varchar" placeholder="Username"
						name="username" value=""> 
			</div> 
			<div class="textbox"> 
				<i class="fa fa-lock" aria-hidden="true"></i> 
				<input type="password" placeholder="Password"
						name="password" value=""> 
			</div> 
			<input class="button" type="submit"
					name="login" value="Sign In"> 
			<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
			<p>An admin? <a href="index.php">Login here</a>.</p>
		</div> 
        </form>
	
<br><br>
<br><br>
        
<footer> 
    <div class="footer">
        <div class="fcontainer">
            <div class="copyright">
                <p>Copyright &copy; Kpoppin 2020</p>
            </div>
            <div class="social">
                <ul>
                <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                <li><a href="https://twitter.com/home?lang=en" class="fa fa-twitter"></a></li>
                 <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                 <li><a href="https://www.youtube.com/" class="fa fa-youtube"></a></li>
                 <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
              </ul>
            </div>
            <div class="info">
                <ul> 
                    <li><a href="#">About us</a></li> 
                    <li><a href="#">Privacy Policy</a></li> 
                    <li><a href="#">Terms &amp; Conditions</a></li> 
                </ul> 
            </div>  
        </div>
</footer> 

</body>
</html>