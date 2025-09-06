<?php
require_once "config.php";
 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);   
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kpoppin: Sign Up</title>
		<meta charset="UTF-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../pics/icon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="../css/nav.css">
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
	<br><br><br>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="login-box"> 
			<br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>
			<br><br><br>
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </div>
        </form>
    </div> 	
			
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