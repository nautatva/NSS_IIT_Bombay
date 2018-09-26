function addCommas(nStr) {
  nStr += '';
  let x = nStr.split('.');
  let x1 = x[0];
  let x2 = x.length > 1 ? '.' + x[1] : '';
  let rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
}

function increaseNumber() {
  if (i < 201000) {
    $('#fbReach').text(addCommas(i));
    i = i + 5041;
  }
}
var i = 0;
element = '#fbReach';
finalNumber = 4;
var nextIn;
function numbers() {
  setInterval(increaseNumber, 25);
}

$(window).scroll(function() {
  var hT = $('#fbReach').offset().top,
      hH = $('#fbReach').outerHeight(),
      wH = $(window).height(),
      wS = $(this).scrollTop();
  if (wS > (hT+hH-wH)){
   numbers();
  }
});