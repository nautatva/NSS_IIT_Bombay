$(document).ready(function() {
  $('.nav-mobile ul').hide();
  $('.preventDefault').click(function(e) {
    e.preventDefault();
    var $menuItem = $(this).next('ul');
    $menuItem.slideToggle();
    $('.nav-mobile ul')
      .not($menuItem)
      .slideUp();
  });
});
