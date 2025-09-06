<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kpoppin: Admin</title>
		<meta charset="UTF-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../pics/icon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="../css/nav.css"> 
		<link rel="stylesheet" type="text/css" href="../css/home.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <br><br><br>
        <h2 style="text-align: center">Hello Admin!<br><br>You have successfully logged in and Welcome back!</h2>
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