
const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

if(menuBtn && navLinks){

menuBtn.addEventListener("click",()=>{

navLinks.classList.toggle("active");

});

}
document.querySelectorAll(".nav-links a").forEach(link=>{

link.addEventListener("click",()=>{

if(navLinks){

navLinks.classList.remove("active");

}

});

});
document.addEventListener("click",(e)=>{

if(menuBtn && navLinks){

if(
!menuBtn.contains(e.target) &&
!navLinks.contains(e.target)
){

navLinks.classList.remove("active");

}

}

});
const navbar=document.querySelector(".navbar");

window.addEventListener("scroll",()=>{

if(navbar){

if(window.scrollY>40){

navbar.style.boxShadow="0 6px 20px rgba(0,0,0,.25)";

}else{

navbar.style.boxShadow="none";

}

}

});
const slider=document.getElementById("slider");

if(slider){

const images=[

"images/car1.jpg",
"images/car2.jpg",
"images/car3.jpg",
"images/car4.jpg",
"images/car5.jpg",
"images/car6.jpg"

];

let current=0;

setInterval(()=>{

current++;

if(current>=images.length){

current=0;

}

slider.src=images[current];

},3000);

}
const sections=document.querySelectorAll("section");

const observer=new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.style.opacity="1";
entry.target.style.transform="translateY(0)";

}

});

},{
threshold:.2
});

sections.forEach(section=>{

section.style.opacity="0";

section.style.transform="translateY(50px)";

section.style.transition=".8s";

observer.observe(section);

});
document.querySelectorAll("button,.btn").forEach(btn=>{

btn.addEventListener("mouseenter",()=>{

btn.style.transform="scale(1.05)";

});

btn.addEventListener("mouseleave",()=>{

btn.style.transform="scale(1)";

});

});

const search=document.getElementById("search");

if(search){

search.addEventListener("focus",()=>{

search.style.borderColor="#ff3c00";

});

search.addEventListener("blur",()=>{

search.style.borderColor="#ccc";

});

}

document.querySelectorAll("table tr").forEach(row=>{

row.addEventListener("mouseenter",()=>{

row.style.background="#f7f7f7";

});

row.addEventListener("mouseleave",()=>{

row.style.background="white";

});

});

const topBtn=document.createElement("button");

topBtn.innerHTML="⬆";

topBtn.style.position="fixed";
topBtn.style.right="20px";
topBtn.style.bottom="20px";
topBtn.style.width="50px";
topBtn.style.height="50px";
topBtn.style.borderRadius="50%";
topBtn.style.display="none";
topBtn.style.zIndex="9999";

document.body.appendChild(topBtn);

window.addEventListener("scroll",()=>{

if(window.scrollY>300){

topBtn.style.display="block";

}else{

topBtn.style.display="none";

}

});

topBtn.addEventListener("click",()=>{

window.scrollTo({

top:0,

behavior:"smooth"

});

});

window.addEventListener("load",()=>{

document.body.style.opacity="1";

});

document.body.style.opacity="0";

document.body.style.transition=".4s";