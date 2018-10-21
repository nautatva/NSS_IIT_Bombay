function stick() {
  // When the user scrolls the page, execute myFunction
  window.onscroll = function() {
    myFunction();
  };

  // Get the navbar
  let navbar = document.getElementById('sticky-navbar');
  let stickylim = navbar.offsetTop - 53;
  let mfix = document.getElementById('m-fix');

  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.innerWidth > 760) {
      if (window.pageYOffset <= innerHeight - 53) {
        navbar.classList.remove('sticky');
        mfix.style.height = '0';
      } else if (window.pageYOffset >= navbar.offsetTop - 53) {
        navbar.classList.add('sticky');
        mfix.style.height = '47px';
      } else {
        navbar.classList.remove('sticky');
        mfix.style.height = '0';
      }
    }
  }
}
