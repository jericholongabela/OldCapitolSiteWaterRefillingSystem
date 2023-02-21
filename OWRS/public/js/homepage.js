var modal = document.getElementById("informationmodal");
var button1 = document.getElementById("buttonone");
var button2 = document.getElementById("buttontwo");
var button3 = document.getElementById("buttonthree");
var closemodal = document.getElementsByClassName("close")[0];

let p1 = "Hello World!";
let p2 = "content of second modal";
let p3 = "Content of the third modal";

//var content1 = decument.getElementById("content1");

button1.onclick = function(){
    modal.style.display = "block";
    document.getElementById("content1").innerHTML=p1;
}
button2.onclick = function(){
    modal.style.display = "block";
    document.getElementById("content1").innerHTML=p2;
}

button3.onclick = function(){
    modal.style.display = "block";
    document.getElementById("content1").innerHTML=p3;
}
closemodal.onclick = function(){
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}
