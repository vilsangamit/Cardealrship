let cars = JSON.parse(localStorage.getItem("cars")) || [];

displayCars();

function saveCar(){

let name=document.getElementById("carName").value;
let price=document.getElementById("carPrice").value;
let image=document.getElementById("carImage").value;
let index=document.getElementById("carIndex").value;

if(name==="" || price==="" || image===""){

alert("Please fill all fields.");
return;

}

let car={
name:name,
price:price,
image:image
};

if(index===""){

cars.push(car);

}
else{

cars[index]=car;

}

localStorage.setItem("cars",JSON.stringify(cars));

document.getElementById("carName").value="";
document.getElementById("carPrice").value="";
document.getElementById("carImage").value="";
document.getElementById("carIndex").value="";

displayCars();

}

function displayCars(){

let table="";

cars.forEach((car,index)=>{

table+=`

<tr>

<td><img src="${car.image}" width="120"></td>

<td>${car.name}</td>

<td>${car.price}</td>

<td>

<button class="edit" onclick="editCar(${index})">

Edit

</button>

</td>

<td>

<button class="delete" onclick="deleteCar(${index})">

Delete

</button>

</td>

</tr>

`;

});

document.getElementById("tableBody").innerHTML=table;

}

function editCar(index){

document.getElementById("carName").value=cars[index].name;
document.getElementById("carPrice").value=cars[index].price;
document.getElementById("carImage").value=cars[index].image;
document.getElementById("carIndex").value=index;

}

function deleteCar(index){

if(confirm("Delete this car?")){

cars.splice(index,1);

localStorage.setItem("cars",JSON.stringify(cars));

displayCars();

}

}