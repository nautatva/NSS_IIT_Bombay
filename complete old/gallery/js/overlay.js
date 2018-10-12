function overlay() {
  $('.overlay').show();
  changeImg();
}
let i=0;
const image = ['image1.jpg','image2.jpg','image3.jpg','image4.jpg' ];
const time=2000;


function changeImg(){
    
    document.slide.src=image[i];

    if (i<image.length-1) {
        i++;
    }else{
        i=0;
    }
    
    setTimeout("changeImg()",time);
}