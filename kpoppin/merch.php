<?php
session_start();
require_once("dbcontroller.php");
$db_handle8= new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode8 = $db_handle8->runQuery("SELECT * FROM merch WHERE code='" . $_GET["code"] . "'");
			$itemArray8 = array($productByCode8[0]["code"]=>array('name'=>$productByCode8[0]["name"], 'code'=>$productByCode8[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode8[0]["price"], 'image'=>$productByCode8[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode8[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode8[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray8);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray8;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<html>
	<head>
		<title>Kpoppin: Merchandise</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="pics/icon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/nav.css"> 
		<link rel="stylesheet" type="text/css" href="css/albums.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
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
        <a href="http://localhost/kpoppin/home.html"><img src="pics/logo.png" class="logo" style="width: 40%; height: 30%"></a>
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
                        <a href="http://localhost/kpoppin/bpfansite.html">BLACKPINK Fansite&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
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
	<br><br>
	<div class="row" >
		<div class="left">
		<h2>Hot Artists</h2>
		<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category"
		style="width:250px">
		<ul id="myMenu" style="width:250px">
			<li><a href="blackpink.php">BLACKPINK</a></li>
			<li><a href="bts.php">BTS</a></li>
			<li><a href="mamamoo.php">MAMAMOO</a></li>
			<li><a href="nct.php">NCT</a></li>
			<li><a href="exo.php">EXO</a></li>
			<li><a href="redvelvet.php">Red Velvet</a></li>
			<li><a href="suju.php">Super Junior</a></li>
			<li><a href="2ne1.php">2NE1</a></li>
			<li><a href="everglow.php">Everglow</a></li>
		</ul>
		</div>
  
	<script>
		function myFunction() {
			var input, filter, ul, li, a, i;
			input = document.getElementById("mySearch");
			filter = input.value.toUpperCase();
			ul = document.getElementById("myMenu");
			li = ul.getElementsByTagName("li");
		
		for (i = 0; i < li.length; i++) {
			a = li[i].getElementsByTagName("a")[0];
			if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
				li[i].style.display = "";
			} else {
				li[i].style.display = "none";
			}
		}
		}
	</script>

	<br><br>
	<div class="product-grid" style="padding-left:50px">
	
	<?php
	$product_array8 = $db_handle8->runQuery("SELECT * FROM merch ORDER BY id ASC");
	if (!empty($product_array8)) { 
		foreach($product_array8 as $key=>$value){
	?>
		<div class="product-item" style="height:350px;width:250px" >
			<form method="post" action="cart.php?action=add&code=<?php echo $product_array8[$key]["code"]; ?>" >
			<div class="product-image" style="height:210px;">
				<center>
				<img src="<?php echo $product_array8[$key]["image"]; ?>" style="height:200px;width:199px;padding-left:20px"></center>
			
			</div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array8[$key]["name"];?></div>
			<div class="product-price"><?php echo "$".$product_array8[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input class="btnAddAction" type="submit" value="Add to Cart" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
	</div>
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
                    <li><a href="#">About Us</a></li> 
                    <li><a href="#">Privacy Policy</a></li> 
                    <li><a href="#">Terms &amp; Conditions</a></li> 
                </ul> 
            </div>  
        </div>
</footer> 

</body>
</html>