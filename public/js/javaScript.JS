window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbarback").classList.add("fixed");
  } else {
    document.getElementById("navbarback").classList.remove("fixed");
  }
}