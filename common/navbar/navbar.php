<script src="../common/common.js"></script>
<!-- navbar -->
<div w3-include-html="../common/navbar/navbar.html"></div>
<script>
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
</script>
<!-- includeHTML() in last -->
