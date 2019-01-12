let i = 0;
const image = ['assets/images/EO/ALP.jpg', '../assets/images/EO/OLI.jpg', 'image3.jpg', 'image4.jpg'];
const time = 2000;

function changeImg() {
  document.getElementById('flip1f').src = image[i];
  if (i < image.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout('changeImg()', time);
}
//optimize for network