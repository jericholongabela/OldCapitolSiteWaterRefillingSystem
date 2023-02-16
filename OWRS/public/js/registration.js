var modal = document.getElementById("registrationmodal");

// Get the button that opens the modal
var btn = document.getElementById("modalbtn");

var container = document.getElementById("maincontainer");
var step1  = document.getElementById("step1");
var step2  = document.getElementById("step2");
var pagebtn = document.getElementById("pagebtn");
var steplabel1 = document.getElementById("steplabel1");
var steplabel2 = document.getElementById("steplabel2");
var back =  document.getElementById("back");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
  container.style.filter = "blur(8px)";
}
pagebtn.onclick = function() {
    step1.style.display = "none";
    step2.style.display = "block";
    steplabel1.style.backgroundColor = "transparent";
    steplabel2.style.backgroundColor = "#85f937";
}
back.onclick = function() {
    step2.style.display = "none";
    step1.style.display = "block";
    steplabel2.style.backgroundColor = "transparent";
    steplabel1.style.backgroundColor = "#85f937";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    container.style.filter = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    container.style.filter = "none";
  }
}
