<!DOCTYPE html>
<html lang="en">
<head>
<title>Grocery Store</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="indexjava.js"></script>
<script src="javatest.js"></script>

<style src="style1.css"></style>
<style>

body {
  font-family: Arial;
  background: lightgreen;
  margin: 0 10px;
}


    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 200px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: 5px solid;
  border-color : white;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  border-radius : 3px;
}

.card button:hover {
  opacity: 0.7;
}

.col2{
    width: 4%;
}

.col3{
    width: 8.5%;
}



    .column {
  float: left;
  width: 25%;
  padding: 50px;
}

.row {
  display: flex;
}
.homebutton {
  background-color: #9db8f0;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:5px;
}

/*MainTest*/
.btn-primary {
    border: none;
    padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:5px;
}
.btn-secondary {
    border: none;
    padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:5px;
}
.btn-danger{
    border: none;
    padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:5px;
}




* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 3px 80px 42px 125px;
}

.containerp {
  background-color: #eceef3;
    padding: 22px 178px 15px 31px;
    border: 2px solid #140117;
    border-radius: 13px;
}

input[type=text] {
  width: 30%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btnp {
  background: #2196f3;
    text-align: center;
    color: #f8f8f8;
    cursor: pointer;
    max-width: 123px;
    margin: 66px auto;
    height: auto;
    padding: 17px;
    padding-top: 14px;
    border-radius: 15px;
    position: relative;
}
.buttonp{
    margin-top: 1px;
    background: #2196f3;
    padding: 6px;
    text-align: center;
    color: #f8f8f8;
    border-radius: 8px;
    cursor: pointer;
}

.btnp:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
 body {
  font-family: Arial;
  background: #2196F3;
  margin: 0 10px;
}


    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 200px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: 5px solid;
  border-color : white;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  border-radius : 3px;
}

.card button:hover {
  opacity: 0.7;
}

.col2{
    width: 4%;
}

.col3{
    width: 8.5%;
}



    .column {
  float: left;
  width: 25%;
  padding: 50px;
}

.row {
  display: flex;
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

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>

</head>
<body style="background-color:lightgreen">

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
      
      <li><a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span>Cart (<span class="total-count"></span>)</button></a></li>
      
    </ul>
  </div>
</nav>
<h2 style="text-align:center;color:black;">CHECKOUT WINDOW</h2>
<div class="row">
  <div class="col-75">
    <div class="containerp">
      <form action="#">
        <div class="row">
          <div class="containerp">

          <div>Cart Total:<b>----------------------</b>Rs.<span class="total-cart"></span></div>
      
          <div>Total Amount:<b>------------------</b>Rs.<span class="total-cart"></span></div>

    </div>
        </div> 
        <br><br><h2>Select Your Payment Option:</h2>
        <input type="checkbox" id="myCheck" onclick="myFunction()">
        <label for="myCheck">Card Payment</label> 

        <p id="text" style="display:none"><a href="cardpayment.html"><button type="button" class="buttonp" >proceed</button></a></p>

        <label>
          <br><input type="checkbox" unchecked="checked" name="cod"><br> Cash on Delivery 
        </label>
         </form>
      <div class="btnp">
        <a href="review.php" style="color: white">Submit</a>
        </div>
    </div>
  </div> 
  </div>
</div>


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
</body>
</html>
