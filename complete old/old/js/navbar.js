function openNav() {
  cssString =
    'width: 18.75rem; box-shadow: -1px 0px 1px 1px rgba(0, 0, 0, 0.2);';
  document.getElementById('mySidenav').style.cssText = cssString;
}

function closeNav() {
  cssString = 'width: 0rem; box-shadow: none;';
  document.getElementById('mySidenav').style.cssText = cssString;
}
