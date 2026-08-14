<?php
include "header.php";

$cars = json_decode(file_get_contents("cars.json"), true);

if(!$cars){
    $cars = [];
}
?>

<section class="featured" style="margin-top:100px;">

<h2>Available Cars</h2>

<input
type="text"
id="search"
placeholder="Search Car..."
style="width:320px;padding:12px;margin-bottom:30px;">

<div class="card-container" id="carContainer">

<?php

foreach($cars as $car){

?>

<div class="card">

<img src="<?php echo $car['image']; ?>">

<h3><?php echo $car['name']; ?></h3>

<p><?php echo $car['price']; ?></p>

<button onclick="showDetails(
'<?php echo $car['name']; ?>',
'<?php echo $car['price']; ?>'
)">

View Details

</button>

</div>

<?php

}

?>

</div>

</section>

<script>

function showDetails(name,price){

alert(

"Car Name : "+name+

"\nPrice : "+price

);

}

document.getElementById("search").addEventListener("keyup",function(){

let value=this.value.toLowerCase();

let cards=document.querySelectorAll(".card");

cards.forEach(card=>{

let title=card.querySelector("h3").innerText.toLowerCase();

if(title.includes(value)){

card.style.display="block";

}else{

card.style.display="none";

}

});

});

</script>

<?php include "footer.php"; ?>