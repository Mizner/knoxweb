// Toggle Class

var tog = document.getElementById("tog");
var thing = document.getElementById("thing");

tog.addEventListener("click", function() {
  thing.classList.toggle("open");
  document.getElementById("searchField").focus();
});

var gQuote = document.getElementById("getQuote");
var qForm = document.getElementById("quoteForm");

gQuote.addEventListener("click", function() {
  qForm.classList.toggle("open");
});