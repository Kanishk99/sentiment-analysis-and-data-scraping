var i = 0;
var images = [];
var time = 3000;

//Image List
images[0] = './reviews/image1.png'
images[1] = './reviews/image2.png'
images[2] = './reviews/image3.png'
images[3] = './reviews/image4.png'

function changeImg() {
    document.slide1.src = images[i];
    // document.slide2.src = images[i];
    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout("changeImg()", time);

}
window.onload = changeImg;