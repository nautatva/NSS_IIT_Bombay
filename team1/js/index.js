var draggable = document.getElementById('draggable');
var head = document.getElementsByTagName('head')[0];
var Headername = document.getElementById('name');
var info = document.getElementById('info');
var s = document.createElement('style'); // creating the style tag to be animated
s.type = 'text/css';

var dragstatus = 0;
var offsetX, offsetY;
var displayX, displayY;
var percent = 0.75; // the ratio between the mouse pointer, circle and person
var i = 0; // is the index of the closest point in pointsArr at any given moment of a drag on the document
var j = 0; // is the index of the previous point in pointsArr for the animation between points should be set to equal 'i' at Doc load

// assigning each person: coordinates in the image, from top left corner and info, will probably be JSON in real website.
var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var h = Math.max(
  document.documentElement.clientHeight,
  window.innerHeight || 0
);
var pointsArr = [
  {
    x: 0.2 * w,
    y: 116,
    name: 'Tom',
    info: "Hi, I'm Tom. Please drag the red circle."
  },
  {
    x: 469,
    y: 208,
    name: 'Tom',
    info: "Hi, I'm Tom. Please drag the red circle."
  },
  {
    x: 623,
    y: 202,
    name: 'Tom',
    info: "Hi, I'm Tom. Please drag the red circle."
  },
  {
    x: 862.5,
    y: 184.5,
    name: 'Tom',
    info: "Hi, I'm Tom. Please drag the red circle."
  },
  {
    x: 725,
    y: 219,
    name: 'Jane',
    info:
      "I'm Jane. Developed several new methods for short selling wool in Washington, DC. Won several awards for developing weed whackers for no pay. Enthusiastic about donating accordians in Minneapolis, MN. Spent 2001-2008 managing pogo sticks in Suffolk, NY. Crossed the country marketing magma in Los Angeles, CA. Spoke at an international conference about working on action figures in Washington, DC."
  },
  {
    x: 779,
    y: 509,
    name: 'Dave',
    info:
      "I'm Dave. Spent a year analyzing deodorant in Pensacola, FL. Practiced in the art of supervising the production of tinker toys in the government sector. Have a strong interest in working on dolls with no outside help. Lead a team getting my feet wet with robotic shrimp in Ocean City, NJ. Spent two years creating marketing channels for bullwhips in New York, NY. At the moment I'm merchandising wooden tops for no pay."
  },
  {
    x: 876,
    y: 402,
    name: 'George',
    info:
      "I'm George. Spent 2002-2007 donating bullwhips in the government sector. Garnered an industry award while building tar in Minneapolis, MN. Spent 2001-2007 licensing bacon with no outside help. Spent 2001-2007 getting to know velcro for no pay. At the moment I'm investing in bassoons for no pay. Spent childhood managing weed whackers in West Palm Beach, FL"
  },
  {
    x: 1123,
    y: 480,
    name: 'Hank',
    info:
      "I'm Hank. Spent college summers exporting dolls in Fort Walton Beach, FL. Spent 2002-2010 short selling hula hoops in the financial sector. Had moderate success licensing the elderly on the black market. Lead a team licensing yard waste in Jacksonville, FL. Spent childhood testing the market for foreign currency in Ohio. Spent 2002-2010 importing Roombas in New York, NY."
  },
  {
    x: 1340,
    y: 530,
    name: 'Matthew',
    info:
      "I'm Matthew. Spent college summers exporting dolls in Fort Walton Beach, FL. Spent 2002-2010 short selling hula hoops in the financial sector. Had moderate success licensing the elderly on the black market. Lead a team licensing yard waste in Jacksonville, FL. Spent childhood testing the market for foreign currency in Ohio. Spent 2002-2010 importing Roombas in New York, NY."
  }
];

// setting the initial information and style to be displayed
document.addEventListener('DOMContentLoaded', function() {
  Headername.innerHTML = pointsArr[0].name;
  info.innerHTML = pointsArr[0].info;
  Headername.style.color = 'black';
  Headername.style.textShadow = '0px 0px 0 px #000000';
  info.style.color = 'black';
  info.style.textShadow = '0px 0px 0 px #000000';
});

// reseting circle drag end point
document.addEventListener('dragend', function() {
  displayX = null;
  displayY = null;
  i = j;
});

// while there is a draagged object on the page check which point is closest and get its array position. j is the stored closest point and i is always being checked, if they are not the same there will be an animation from one to the other and j will be set to be i.
document.addEventListener('dragover', function(e) {
  var currX = e.clientX;
  var currY = e.clientY;
  i = closestPoint(currX, currY);
  displayX = setPosition(pointsArr[i].x, currX, offsetX);
  displayY = setPosition(pointsArr[i].y, currY, offsetY);
  if (i !== j && dragstatus == 1) {
    var displayJX = setPosition(pointsArr[j].x, currX, offsetX);
    var displayJY = setPosition(pointsArr[j].y, currY, offsetY);
    animate(displayJX, displayJY, displayX, displayY);
  }
});

// setting the drag icon. and offseting the point that was clicked on the circle so in wouldn't jump to the mouse pointer.
draggable.addEventListener('dragstart', function(e) {
  e.dataTransfer.setData('Text', '');
  var dragIcon = document.createElement('img');
  dragIcon.src = 'ghostImg.png';
  e.dataTransfer.setDragImage(dragIcon, -10, -10);
  offsetX = (pointsArr[i].x - e.clientX) * percent;
  offsetY = (pointsArr[i].y - e.clientY) * percent;
  dragstatus = 1;
});

// set the position of the dragged object and bluring the text.
draggable.addEventListener('drag', function() {
  draggable.style.left = displayX + 'px';
  draggable.style.top = displayY + 'px';
  info.style.textShadow =
    '0px 0px ' +
    (Math.abs(displayY - pointsArr[i].y) * 1.5) / 20 +
    'px #000000';
  Headername.style.textShadow =
    '0px 0px ' +
    (Math.abs(displayY - pointsArr[i].y) * 1.5) / 20 +
    'px #000000';
  Headername.style.color = 'transparent';
  info.style.color = 'transparent';
  Headername.innerHTML = pointsArr[i].name;
  info.innerHTML = pointsArr[i].info;
});

// append the animation style to the HTML so the circle will animate from one point to another or to the closest person.
draggable.addEventListener('dragend', function() {
  animate(displayX, displayY, pointsArr[i].x, pointsArr[i].y);
  draggable.style.left = pointsArr[i].x + 'px';
  draggable.style.top = pointsArr[i].y + 'px';
  dragstatus = 0;
  Headername.style.color = 'black';
  Headername.style.textShadow = 'none';
  info.style.color = 'black';
  info.style.textShadow = 'none';
});

// set draggable end position and remove animation tag from HTML
draggable.addEventListener('animationend', function(e) {
  head.removeChild(s);
  j = i;
});

// cycle through the points array and return the closest one's distance and its position
function closestPoint(x, y) {
  var distanceArr = [];
  for (var i = 0; i < pointsArr.length; i++) {
    var D = Math.sqrt(
      Math.pow(pointsArr[i].x - x, 2) + Math.pow(pointsArr[i].y - y, 2)
    );
    distanceArr[i] = D;
  }
  var index = distanceArr.indexOf(Math.min.apply(null, distanceArr));

  return index;
}

function animate(startX, StartY, endX, endY) {
  s.appendChild(
    document.createTextNode(
      '\
		#draggable{\
			-webkit-animation: return 0.1s ease-in;\
			animation: return 0.1s ease-in;\
		}\
		@-webkit-keyframes return{\
			0%{left:' +
        startX +
        'px; top:' +
        StartY +
        'px;}\
			100%{left:' +
        endX +
        'px; top:' +
        endY +
        'px;}\
		}\
		@keyframes return{\
			0%{left:' +
        startX +
        'px; top:' +
        StartY +
        'px;}\
			100%{left:' +
        endX +
        'px; top:' +
        endY +
        'px;}\
		}'
    )
  );

  head.appendChild(s);
}

function setPosition(coor, currentMP, offset) {
  return coor + offset + percent * (currentMP - coor); // MP = MousePosition  coor = coordinate of person
}
