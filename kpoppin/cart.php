<?php
error_reporting(0);
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$db_handle1 = new DBController();
$db_handle2 = new DBController();
$db_handle3 = new DBController();
$db_handle4 = new DBController();
$db_handle5 = new DBController();
$db_handle6 = new DBController();
$db_handle7 = new DBController();
$db_handle8 = new DBController();


if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
	
	//blackpink
		if(!empty($_POST["quantity"])) {
			
			$productByCode = $db_handle->runQuery("SELECT * FROM blackpink WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			} 
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
			
		}
		
		//bts
		if(!empty($_POST["quantity"])) {
			$productByCode1 = $db_handle1->runQuery("SELECT * FROM bts WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray1 = array($productByCode1[0]["code"]=>array('name'=>$productByCode1[0]["name"], 'code'=>$productByCode1[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode1[0]["price"], 'image'=>$productByCode1[0]["image"]));
			}
			
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode1[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode1[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray1);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray1;
			}
			
		}
	
		//mamamoo
		if(!empty($_POST["quantity"])) {
			$productByCode2 = $db_handle2->runQuery("SELECT * FROM mamamoo WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray2 = array($productByCode2[0]["code"]=>array('name'=>$productByCode2[0]["name"], 'code'=>$productByCode2[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode2[0]["price"], 'image'=>$productByCode2[0]["image"]));
			} 
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode2[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode2[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray2);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray2;
			}
			
		}
		
		
		//nct
		if(!empty($_POST["quantity"])) {
			$productByCode3 = $db_handle3->runQuery("SELECT * FROM nct WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray3 = array($productByCode3[0]["code"]=>array('name'=>$productByCode3[0]["name"], 'code'=>$productByCode3[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode3[0]["price"], 'image'=>$productByCode3[0]["image"]));
			} 
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode3[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode3[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray3);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray3;
			}
			
		}
		
		//exo
		if(!empty($_POST["quantity"])) {
			$productByCode4 = $db_handle4->runQuery("SELECT * FROM exo WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray4 = array($productByCode4[0]["code"]=>array('name'=>$productByCode4[0]["name"], 'code'=>$productByCode4[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode4[0]["price"], 'image'=>$productByCode4[0]["image"]));
			} 
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode4[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode4[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray4);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray4;
			}
			
		}
		
		//album
				if(!empty($_POST["quantity"])) {
			$productByCode5 = $db_handle5->runQuery("SELECT * FROM album WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray5 = array($productByCode5[0]["code"]=>array('name'=>$productByCode5[0]["name"], 'code'=>$productByCode5[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode5[0]["price"], 'image'=>$productByCode5[0]["image"]));
			} 
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode5[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode5[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray5);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray5;
			}
			
		}
		
		//star1
		if(!empty($_POST["quantity"])) {
			$productByCode6 = $db_handle6->runQuery("SELECT * FROM star1 WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray6 = array($productByCode6[0]["code"]=>array('name'=>$productByCode6[0]["name"], 'code'=>$productByCode6[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode6[0]["price"], 'image'=>$productByCode6[0]["image"]));
			} 
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode6[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode6[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray6);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray6;
			}
			
		}
		
		
		//star2
	if(!empty($_POST["quantity"])) {
			$productByCode7 = $db_handle7->runQuery("SELECT * FROM star2 WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray7 = array($productByCode7[0]["code"]=>array('name'=>$productByCode7[0]["name"], 'code'=>$productByCode7[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode7[0]["price"], 'image'=>$productByCode7[0]["image"]));
			} 
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode7[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode7[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray7);
				}
				
			} else {
				$_SESSION["cart_item"] = $itemArray7;
			}
			
		}
		
		
		//merch
		if(!empty($_POST["quantity"])) {
			
			$productByCode8 = $db_handle8->runQuery("SELECT * FROM merch WHERE code='" . $_GET["code"] . "'");
			
			if(!empty($_POST["quantity"])) {
			
			$itemArray8 = array($productByCode8[0]["code"]=>array('name'=>$productByCode8[0]["name"], 'code'=>$productByCode8[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode8[0]["price"], 'image'=>$productByCode8[0]["image"]));
			} 
			
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
		<title>Kpoppin: My Cart</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="pics/icon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
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

<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1" border="0">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="pics/icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td><button onclick="myFunction()">CheckOut</button>

<script>
function myFunction() {
  alert("Thank you, Your Order Have Been Placed Successfully!");
    window.location.href = "http://localhost/kpoppin/home.html";
}
</script>
</td>





</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
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