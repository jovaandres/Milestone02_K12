//Get the button
var mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  var pageOffset = document.documentElement.scrollTop || document.body.scrollTop,
  btn = document.getElementById('back-to-top');
  if (btn) btn.style.visibility = pageOffset > 450 ? 'visible' : 'hidden';
};

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}