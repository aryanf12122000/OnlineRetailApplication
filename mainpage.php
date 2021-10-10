<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="indexjava.js"></script>
<style src="style1.css"></style>
<style>

body {
  font-family: Arial;
  background: lightgreen;
  margin: 0 10px;
}

.mySlides {display:none;}
	<style>
		
		.w3-content w3-section{
			margin-left: 0px;

		}
		.srb{
			height: 300px
			width:200px;
			margin-top: 0px
		}
		.container{
			background-color: lightblue;
			margin-bottom: 0px;
      margin-top: 0px;
		}
		.h1{
			margin-left: 0px
		}
		.mySlides {display:none;}

    .column1{
      background-image: url(Grocery.png);
      margin: auto;
    width: 200px;
    height: 198px;
    border-radius: 21px;
    float: left;
    width: 34.33%;
    flex: 33.33%;
    padding: 11px 0px 0px 0px;   
    }
    .column2{
      background-image: url('Fruits.png');
      margin: auto;
    width: 200px;
    height: 198px;
    border-radius: 21px;
    float: left;
    width: 34.33%;
    flex: 33.33%;
    padding: 11px 0px 0px 0px;  }
    .column3{
      background-image: url('Dairy.png');
      margin: auto;
    width: 200px;
    height: 198px;
    border-radius: 21px;
    float: left;
    width: 34.33%;
    flex: 33.33%;
    padding: 11px 0px 0px 0px;   
    }
    .column4{
      background-image: url('Beverages.png');
      margin: auto;
    width: 200px;
    height: 198px;
    border-radius: 21px;
    float: left;
    width: 34.33%;
    flex: 33.33%;
    padding: 11px 0px 0px 0px;
   }
    .column5{
      background-image: url('veg.png');
      margin: auto;
    width: 200px;
    height: 198px;
    border-radius: 21px;
    float: left;
    width: 34.33%;
    flex: 33.33%;
    padding: 11px 0px 0px 0px;  
    }
    .column6{
      background-image: url('pack.png');
      margin: auto;
    width: 200px;
    height: 198px;
    border-radius: 15px;
    float: left;
    width: 34.33%;
    flex: 33.33%;
    padding: 11px 0px 0px 0px;  
    }


    .c1{
  background-image: url(Grocery.png);
  float: left;
  width: 25%;
  padding: 50px;
  border-radius: 15px;
}
.c2{
  background-image: url('Fruits.png');
  float: left;
  width: 25%;
  padding: 50px;
  border-radius: 15px;
}
.c3{
  background-image: url('Dairy.png');
  float: left;
  width: 25%;
  padding: 50px;
  border-radius: 15px;
}
.c4{
  background-image: url('Beverages.png');
  float: left;
  width: 25%;
  padding: 50px;
  border-radius: 15px;
}
.c5{
  background-image: url('veg.png');
  float: left;
  width: 25%;
  padding: 50px;
  border-radius: 15px;
}
.c6{
  background-image: url('pack.png');
  float: left;
  width: 25%;
  padding: 50px;
  border-radius: 15px;
}
.col2{
    width: 4%;
    background-color:  lightgreen    
}

.col3{
    width: 8.5%;
    background-color:  lightgreen    
}



    .column {
  float: left;
  width: 33.33%;
  padding: 50px;
}

.row {
  display: flex;
}

.btns {
  background-color: transparent;
  color: black;
  border: 10px solid transparent;
  border-radius : 20px;
}

.btns:hover {
  background-color: black;
  color: white;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  padding: 13px 0px 0px 50px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {

  background: #55ACEE;
  color: white;


	</style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
    <div class="container-fluid">
    <img style="margin-left: 0px" src="logo.png"  width="250" height="100">
    <div class="navbar-header"></div>
       <div class="navbar-header">
</div>
      <div class="navbar-header">
          <a href="mainpage.php">Home</a>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories</a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="grocerypage.php">Grocery</a></li>
          <li><a href="vegetablespage.php">Vegetables</a></li>
          <li><a href="fruitspage.php">Fruits</a></li>
          <li><a href="packedfoodpage.php">Packed Food</a></li>
          <li><a href="dairypage.php">Dairy</a></li>
          <li><a href="beveragespage.php">Beverages</a></li>
          </ul>
    </div>
    <div class="dropdown">
    <input class="form-control mr-sm-2" id="myInput" type="text" onkeyup="myFunctionsearch()" placeholder="Search">
    <div class="dropdown-content">
  <table id="myTable">
  <tr class="header">
    <th style="width:60%;">Product</th>
    <th style="width:40%;">Category</th>
  </tr>
  <tr>
    <td><a href="grocerypage.php">ChanaDal</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="grocerypage.php">MoongDal</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="grocerypage.php">TurDal</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="grocerypage.php">Rajma</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="grocerypage.php">Soyabean</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="grocerypage.php">Masoor</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="grocerypage.php">Poha</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="grocerypage.php">Sugar</a></td>
    <td>Grocery</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Onion</a></td>
    <td>Vegetables</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Potato</a></td>
    <td>Vegetables</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Tomato</a></td>
    <td>Vegetables</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Cabbage</a></td>
    <td>Vegetables</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Greenchilli</a></td>
    <td>Vegetables</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Brinjal</a></td>
    <td>Vegetables</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Capsicum</a></td>
    <td>Vegetables</td>
  </tr>
  <tr>
    <td><a href="vegetablespage.php">Carrot</a></td>
    <td>Vegetables</td>
  </tr> 
  <tr>
    <td><a href="fruitspage.php">Apple</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="fruitspage.php">Orange</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="fruitspage.php">Kiwi</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="fruitspage.php">Watermelon</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="fruitspage.php">SweetLime</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="fruitspage.php">Muskmelon</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="fruitspage.php">Pomegranate</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="fruitspage.php">Banana</a></td>
    <td>Fruits</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">Hide&Seek</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">GoodDay</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">CornFlakes</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">Cake</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">ChocoPie</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">Noodles</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">Toast</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="packedfoodpage.php">Vermicelli</a></td>
    <td>Packedfood</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Butter</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Milk</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Yougurt</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Paneer</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Dahi</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Shrikhand</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Cheese</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="dairypage.php">Paneer</a></td>
    <td>Dairy</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">Sprite</a></td>
    <td>Beverages</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">AppyFizz</a></td>
    <td>Beverages</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">RedBull</a></td>
    <td>Beverages</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">TropicanaJuice</a></td>
    <td>Beverages</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">ThumpsUp</a></td>
    <td>Beverages</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">RoohAfza</a></td>
    <td>Beverages</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">ChocolateSyrup</a></td>
    <td>Beverages</td>
  </tr>
  <tr>
    <td><a href="beveragespage.php">Maaza</a></td>
    <td>Beverages</td>
  </tr>
</table>

  </div>
</div>
<button class="btn btn-success" type="submit">Search</button>

<script>
function myFunctionsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><button class="clear-cart btn btn-danger"><span class="glyphicon glyphicon-user"></span> Login</button></a></li>
      <li><a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span>Cart (<span class="total-count"></span>)</button></a></li>
      
    </ul>
  </div>
</nav>


 

<div style="background-color: lightgreen">
<div class="container-fluid">
 <div style="background-color:  lightgreen">
	<!--<b><h1 style="text-align: center; margin-top: 50px ; background-color: black; color: white" >ORA</h1></b>-->
 	
</div>
</div>
<h1 style="background-color:  lightgreen"

 class="w3-center"><b>Diwali Special Offers</b></h1>

<div style="background-color:  lightgreen" class="w3-content w3-section" style="max-width: 200px">
  <img style="width:100%" class="mySlides" src="img1.jpg" >
  <img style="width:100%" class="mySlides" src="img2.png" >
  <img style="width:100%" class="mySlides" src="img3.png" >
  <img style="width:100%" class="mySlides" src="img4.png">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<div style="background-color:  lightgreen">
	<h1 style="text-align: center; " ><b>What are You looking For Today!!!</b></h1>


<div class="row">

<div class="col3" ></div>

<div class="c1" ><h2 style="color:white;"><a href="grocerypage.php"><button type="button" class="btns" style="width:100%">
Grocery</button></a></h2></div>

<div class="col2" ></div>

<div class="c2"><h2 style="color:white;" ><a href="fruitspage.php"><button type="button" class="btns" style="width:100%">
Fruits</button></a></h2></div>

<div class="col2" ></div>

<div class="c3"><h2 style="color:white;" ><a href="dairypage.php"><button type="button" class="btns"style="width:100%">
Dairy</button></a></h2></div>

<div class="col3" ></div>

</div>
<br>
<div class="row">

<div class="col3" ></div>

<div class="c4"><h2 style="color:white;" ><a href="beveragespage.php"><button type="button" class="btns " style="width:100%">
Beverages</button></a></h2></div>

<div class="col2" ></div>

<div class="c5"><h2 style="color:white;"><a href="vegetablespage.php"><button type="button" class="btns" style="width:100%">
Vegetables</button></a></h2></div>

<div class="col2" ></div>

<div class="c6" ><h2 style="color:white;" ><a href="packedfoodpage.php"><button type="button" class="btns" style="width:100%">
Packed Items</button></a></h2></div>

<div class="col3" ></div>

</div>
<br>
<br>

<h2 style="background-color:  lightgreen" class="w3-center"><b>What We Offer</b></h2>
<table>
  <th>
<div>
<button type="button" class="btn btn-lg"style="margin-left:0px">
<a href="grocerypage.php">
<img src="orggroc.png" style="margin-left: 0px">
</a>
</button>
<button type="button" class="btn btn-lg"style="margin-top: 0px">
<a href="fruitspage.php">
<img class=srb src="freshfg.png" style="width:400px;height:200px">
</a>
</button>

<button type="button" class="btn btn-lg"style="margin-left: 400px margin-top:0px">
  <a href="dairypage.php">
<img class=srb src="dairydelight.png">
</a>
</button>

</div>
</th>
</table>

<h3 style="text-align: center"><b>Top Reviews</b></h3>
<div style="background-color: lightblue" class="container">
  <div class="row">
    <div class="col-sm">
     <i>With Retail Ready you can leisurely shop in the comfort of your own home for just about anything. Retail Ready automatically shows other items for you to compare so you don't have to keep searching for a better price, etc. Shipping costs are usually free or very inexpensive</i>
    </div>
    <div class="col-sm">
      <i>I am very happy with all my purchases since I have been shopping on Retail Ready website. I never had to return any of my items. I buy for myself, any member of my family and friends. I like how I can zoom in to see the photos of the item that I am purchasing from all angles. This helps very much with the decision making if I will really make the purchase.  
    </i>
    </div>
    <div class="col-sm">
      <i>I absolutely love Retail Ready. Their selections, prices, notifications and returns are so easy and customer friendly. I am a disabled veteran with metal rods and screws in my lower back. My resistance to the cold is very low and the cold can be painful.</i>
    </div>
  </div>
</div>
</div>
</div>
</li>
</div>
</div>
</nav>
</body>
<h2 style="text-align: center;"><b>Our Brands</b></h2>
<table border="1">
  <th  style="background-color: white">
    <img src="brand_img/tata.jpg" height="200" width="190">
  </th>
  <th style="background-color: white">
    <img src="brand_img/britannia.jpg" height="200" width="190">
  </th>
  <th style="background-color: white">
    <img src="brand_img/kelloggs.jpg" height="200" width="190">
  </th>
  <th style="background-color: white">
    <img src="brand_img/parleg.jpg" height="200" width="190">
  </th>
  <th style="background-color: white">
    <img src="brand_img/tropicana.jpg" height="200" width="190">
  </th>
  <th style="background-color: white">
    <img src="brand_img/redbull.jpg" height="200" width="190">
  </th>
   <th style="background-color: white">
    <img src="brand_img/lays.png" height="200" width="190">
  </th>
</table>

 <h2 style="text-align: center;"><b>About Us</b></h2> 
  <table border="1" bgcolor="red">
  <footer id="footer" class="footer color-bg">

    
    <div class="links-social inner-top-sm">
        <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="contact-info">
    <div class="footer-logo">
        <div class="logo">
            <a href="mainpage.php">
        
<h2>Retail Ready</h2>
            </a>
        </div>
    
    </div>

     <div class="module-body m-t-20">
        <p class="about-us"> With over 48 products and top brands in our catalogue you will find everything you are looking for. Right from fresh Fruits and Vegetables,Packaged products to Beverages – we have it all.</p>
      <div>
      <h2>Follow Us At</h2>
        <div class="social-icons">
          
          <img style="height: 70" width="70" src="facebook.png">
          <img style="height: 70; margin-left: 20px" width="70" src="twitter.png">

</div>

        </div>
    
    </div>

</div>
</div>

 
              <div class="col-xs-12 col-sm-6 col-md-4">
                 
<div class="contact-information">
  <div class="module-heading">
    <h4 style="margin-left: 60px" class="module-title">Contact Us</h4>
  </div>

  <div class="module-body outer-top-xs">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>Dadar,Mumbai</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>(+91) 9763674521<br>(+91) 8056987653</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#">support@samart.com</a></span>
                </div>
            </li>
              
            </ul>
    </div>
 
</div>

  <div>

            </div>
         
            </div>
        </div>


        </div>
    </div>

<
</div>

</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
 <!-- Modal -->
 <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><button class="btn btn-primary" >My Cart</button></h5>
        <button class="clear-cart btn btn-danger">Clear Cart</button>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: Rs.<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="paymentwindow.php"><button type="button" class="btn btn-primary" >Order now</button></a>
      </div>
    </div>
  </div>
</div> 

<script src="javatest.js"></script>


</html>