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
  // let element = document.getElementById(id);
  if (i < 200000) {
    $('#fbReach').text(i);
    // console.log(i);
    i=i+5041;
  }
  // else {clearInterval};
  // setTimeout(2000);
}
var i = 1;
element = '#fbReach';
finalNumber = 4;
var nextIn;
function numbers() {
  setInterval(increaseNumber, 20 );
}
