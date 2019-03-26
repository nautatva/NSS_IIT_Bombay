$(document).ready(function() {
  let el = $('.card .data .title');
  $.each(el, function(i, e) {
    console.log($(e));
    let divHeight = e.offsetHeight;
    let fontSize = $(el).css('font-size');
    let lineHeight = parseInt(fontSize.replace('px', ''));
    console.log('divHeight', divHeight);

    console.log('lineHeight', lineHeight);

    // var lineHeight = parseInt($(e).css('line-height'));
    // let lineHeight = 1;

    let lines = Math.floor(divHeight / lineHeight);
    $(e)
      .parent()
      .parent()
      .addClass('line' + lines);
  });

  // alert('Lines: ' + lines);
  // $('.card .data').addClass('line' + lines);
  // console.log('line' + lines);
  // console.log(el);
});
