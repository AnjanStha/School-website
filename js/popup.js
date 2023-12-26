document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-popup').style.display = "none";
});

var modal = document.getElementById('id0');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
