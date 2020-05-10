


//any script should enter before this.
window.onscroll = function() {myFunction()};



function myFunction() {
  if (document.body.scrollTop > 140 || document.documentElement.scrollTop > 140) {
    document.getElementById("sideid").className = "sidebar";
  } else {
    document.getElementById("sideid").className = "sideb";
  }
};



