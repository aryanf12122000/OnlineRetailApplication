/*let carts = document.querySelectorAll('.add-cart');

let products = [
  {
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},
{
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},
{
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},
{
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},
{
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},
{
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},
{
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},
{
  name: 'Chana Dal',
  tag: 'chanadal',
  price: 15,
  incart: 0,
},


] 


for (let i=0; i< carts.length; i++){
   carts[i].addEventListener('click', () => {
     console.log("added to cart")
   })
}  

function cartNumbers(){
  let productNumbers= localStorage.getItem('cartNumbers');
  productNumbers = parseint(productNumbers);

  if( productNumbers ){
    localStorage.setItems('cartNumbers', productNumbers+1);
    document.querySelectorAll('.cart span').textContent= productNumbers + 1;
  }
  else {
    localStorage.setItems('cartNumbers',1);
    document.querySelectorAll('.cart span').textContent=1;
  }

}
*/
function getgrocery1() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="ChanaDal---";
  document.getElementById("product1").innerHTML =z;
  document.getElementById("quantity1").innerHTML =x+"---";
  document.getElementById("amount1").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getgrocery2() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Moongdal---";
  document.getElementById("product2").innerHTML =z;
  document.getElementById("quantity2").innerHTML =x+"---";
  document.getElementById("amount2").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getgrocery3() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Turdal---";
  document.getElementById("product3").innerHTML =z;
  document.getElementById("quantity3").innerHTML =x+"---";
  document.getElementById("amount3").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getgrocery4() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Rajma---";
  document.getElementById("product4").innerHTML =z;
  document.getElementById("quantity4").innerHTML =x+"---";
  document.getElementById("amount4").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getgrocery5() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Soyabean---";
  document.getElementById("product5").innerHTML =z;
  document.getElementById("quantity5").innerHTML =x+"---";
  document.getElementById("amount5").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getgrocery6() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Masoor---";
  document.getElementById("product6").innerHTML =z;
  document.getElementById("quantity6").innerHTML =x+"---";
  document.getElementById("amount6").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getgrocery7() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Poha---";
  document.getElementById("product7").innerHTML =z;
  document.getElementById("quantity7").innerHTML =x+"---";
  document.getElementById("amount7").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getgrocery8() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Sugar---";
  document.getElementById("product8").innerHTML =z;
  document.getElementById("quantity8").innerHTML =x+"---";
  document.getElementById("amount8").innerHTML = y;
  alert("Item successfully added in the Cart");
}


function getvegetables1() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="ChanaDal---";
  document.getElementById("product1").innerHTML =z;
  document.getElementById("quantity1").innerHTML =x+"---";
  document.getElementById("amount1").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getvegetables2() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Moongdal---";
  document.getElementById("product2").innerHTML =z;
  document.getElementById("quantity2").innerHTML =x+"---";
  document.getElementById("amount2").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getvegetables3() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Turdal---";
  document.getElementById("product3").innerHTML =z;
  document.getElementById("quantity3").innerHTML =x+"---";
  document.getElementById("amount3").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getvegetables4() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Rajma---";
  document.getElementById("product4").innerHTML =z;
  document.getElementById("quantity4").innerHTML =x+"---";
  document.getElementById("amount4").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getvegetables5() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Soyabean---";
  document.getElementById("product5").innerHTML =z;
  document.getElementById("quantity5").innerHTML =x+"---";
  document.getElementById("amount5").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getvegetables6() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Masoor---";
  document.getElementById("product6").innerHTML =z;
  document.getElementById("quantity6").innerHTML =x+"---";
  document.getElementById("amount6").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getvegetables7() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Poha---";
  document.getElementById("product7").innerHTML =z;
  document.getElementById("quantity7").innerHTML =x+"---";
  document.getElementById("amount7").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getvegetables8() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Sugar---";
  document.getElementById("product8").innerHTML =z;
  document.getElementById("quantity8").innerHTML =x+"---";
  document.getElementById("amount8").innerHTML = y;
  alert("Item successfully added in the Cart");
}


function getfruits1() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="ChanaDal---";
  document.getElementById("product1").innerHTML =z;
  document.getElementById("quantity1").innerHTML =x+"---";
  document.getElementById("amount1").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getfruits2() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Moongdal---";
  document.getElementById("product2").innerHTML =z;
  document.getElementById("quantity2").innerHTML =x+"---";
  document.getElementById("amount2").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getfruits3() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Turdal---";
  document.getElementById("product3").innerHTML =z;
  document.getElementById("quantity3").innerHTML =x+"---";
  document.getElementById("amount3").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getfruits4() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Rajma---";
  document.getElementById("product4").innerHTML =z;
  document.getElementById("quantity4").innerHTML =x+"---";
  document.getElementById("amount4").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getfruits5() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Soyabean---";
  document.getElementById("product5").innerHTML =z;
  document.getElementById("quantity5").innerHTML =x+"---";
  document.getElementById("amount5").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getfruits6() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Masoor---";
  document.getElementById("product6").innerHTML =z;
  document.getElementById("quantity6").innerHTML =x+"---";
  document.getElementById("amount6").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getfruits7() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Poha---";
  document.getElementById("product7").innerHTML =z;
  document.getElementById("quantity7").innerHTML =x+"---";
  document.getElementById("amount7").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getfruits8() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Sugar---";
  document.getElementById("product8").innerHTML =z;
  document.getElementById("quantity8").innerHTML =x+"---";
  document.getElementById("amount8").innerHTML = y;
  alert("Item successfully added in the Cart");
}


function getpackedfood1() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="ChanaDal---";
  document.getElementById("product1").innerHTML =z;
  document.getElementById("quantity1").innerHTML =x+"---";
  document.getElementById("amount1").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getpackedfood2() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Moongdal---";
  document.getElementById("product2").innerHTML =z;
  document.getElementById("quantity2").innerHTML =x+"---";
  document.getElementById("amount2").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getpackedfood3() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Turdal---";
  document.getElementById("product3").innerHTML =z;
  document.getElementById("quantity3").innerHTML =x+"---";
  document.getElementById("amount3").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getpackedfood4() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Rajma---";
  document.getElementById("product4").innerHTML =z;
  document.getElementById("quantity4").innerHTML =x+"---";
  document.getElementById("amount4").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getpackedfood5() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Soyabean---";
  document.getElementById("product5").innerHTML =z;
  document.getElementById("quantity5").innerHTML =x+"---";
  document.getElementById("amount5").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getpackedfood6() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Masoor---";
  document.getElementById("product6").innerHTML =z;
  document.getElementById("quantity6").innerHTML =x+"---";
  document.getElementById("amount6").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getpackedfood7() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Poha---";
  document.getElementById("product7").innerHTML =z;
  document.getElementById("quantity7").innerHTML =x+"---";
  document.getElementById("amount7").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getpackedfood8() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Sugar---";
  document.getElementById("product8").innerHTML =z;
  document.getElementById("quantity8").innerHTML =x+"---";
  document.getElementById("amount8").innerHTML = y;
  alert("Item successfully added in the Cart");
}


function getdairyfood1() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="ChanaDal---";
  document.getElementById("product1").innerHTML =z;
  document.getElementById("quantity1").innerHTML =x+"---";
  document.getElementById("amount1").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getdairy2() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Moongdal---";
  document.getElementById("product2").innerHTML =z;
  document.getElementById("quantity2").innerHTML =x+"---";
  document.getElementById("amount2").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getdairy3() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Turdal---";
  document.getElementById("product3").innerHTML =z;
  document.getElementById("quantity3").innerHTML =x+"---";
  document.getElementById("amount3").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getdairy4() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Rajma---";
  document.getElementById("product4").innerHTML =z;
  document.getElementById("quantity4").innerHTML =x+"---";
  document.getElementById("amount4").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getdairy5() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Soyabean---";
  document.getElementById("product5").innerHTML =z;
  document.getElementById("quantity5").innerHTML =x+"---";
  document.getElementById("amount5").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getdairy6() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Masoor---";
  document.getElementById("product6").innerHTML =z;
  document.getElementById("quantity6").innerHTML =x+"---";
  document.getElementById("amount6").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getdairy7() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Poha---";
  document.getElementById("product7").innerHTML =z;
  document.getElementById("quantity7").innerHTML =x+"---";
  document.getElementById("amount7").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getdairy8() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Sugar---";
  document.getElementById("product8").innerHTML =z;
  document.getElementById("quantity8").innerHTML =x+"---";
  document.getElementById("amount8").innerHTML = y;
  alert("Item successfully added in the Cart");
}


function getbeverages1() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="ChanaDal---";
  document.getElementById("product1").innerHTML =z;
  document.getElementById("quantity1").innerHTML =x+"---";
  document.getElementById("amount1").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getbeverages2() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Moongdal---";
  document.getElementById("product2").innerHTML =z;
  document.getElementById("quantity2").innerHTML =x+"---";
  document.getElementById("amount2").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getbeverages3() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Turdal---";
  document.getElementById("product3").innerHTML =z;
  document.getElementById("quantity3").innerHTML =x+"---";
  document.getElementById("amount3").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getbeverages4() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Rajma---";
  document.getElementById("product4").innerHTML =z;
  document.getElementById("quantity4").innerHTML =x+"---";
  document.getElementById("amount4").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getbeverages5() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Soyabean---";
  document.getElementById("product5").innerHTML =z;
  document.getElementById("quantity5").innerHTML =x+"---";
  document.getElementById("amount5").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getbeverages6() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Masoor---";
  document.getElementById("product6").innerHTML =z;
  document.getElementById("quantity6").innerHTML =x+"---";
  document.getElementById("amount6").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getbeverages7() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Poha---";
  document.getElementById("product7").innerHTML =z;
  document.getElementById("quantity7").innerHTML =x+"---";
  document.getElementById("amount7").innerHTML = y;
  alert("Item successfully added in the Cart");
}

function getbeverages8() {
  var x = document.getElementById("mySelect").value;
  var y=100*x;
  var z="Sugar---";
  document.getElementById("product8").innerHTML =z;
  document.getElementById("quantity8").innerHTML =x+"---";
  document.getElementById("amount8").innerHTML = y;
  alert("Item successfully added in the Cart");
}

   

 function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
        if (checkBox.checked == true){
            text.style.display = "block";
            } else {
              text.style.display = "none";
            }
         }

        




  
  