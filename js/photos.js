//TODO vyriešiť bug, občas sa spawene obrazok rovno na mieste.

//------------------------------------------------ELEMENTS------------------------------------------------

const photosNextBtn = document.getElementById('photosNextBtn');
const photosPreviousBtn = document.getElementById('photosPreviousBtn');
const photoFrame = document.getElementById('photoFrame');

//------------------------------------------------VARIABLES------------------------------------------------

let imagesIndex = 0; let img;
let images = [
    'images/fotky/back.jpg',
    'images/fotky/front.jpg',
    'images/fotky/frontDisplay.jpg',
    'images/fotky/frontDisplay2.jpg',
    'images/fotky/frontLocked.jpg',
    'images/fotky/port.jpg',
    'images/fotky/side1.jpg',
    'images/fotky/side2.jpg'
];

//------------------------------------------------FUNCTIONS------------------------------------------------

function createImage(imagesArray, imageIndex, direction) {
    let imgObject = document.createElement("img");
    imgObject.setAttribute("src", imagesArray[imageIndex]);
    imgObject.setAttribute("class", "slideImg");
    if(direction == "right"){
        imgObject.style.left = "200vw";
    }
    else if(direction == "left"){
        imgObject.style.left = "-200vw";
    }
    photoFrame.appendChild(imgObject);
    setTimeout(() => {
        imgObject.style.left = "var(--photoSize)";
    }, 500);
    
    return imgObject;
}

function removeImage(direction){
    if(direction == "right"){
        img.style.left = "-200vw";
    }
    else if(direction == "left"){
        img.style.left = "200vw"
    }
    if (img) {
        setTimeout(() => {
            while (photoFrame.childNodes.length > 1) {
                photoFrame.removeChild(photoFrame.firstChild);
            }
        },3000);
    }
}

//------------------------------------------------INITIALIZATION------------------------------------------------

img = createImage(images, imagesIndex);

//------------------------------------------------SLIDESHOW------------------------------------------------

photosNextBtn.addEventListener('click', () => {
    imagesIndex++;
    if(imagesIndex > images.length - 1){
        imagesIndex = 0;
    }
    removeImage("left");
    img = createImage(images, imagesIndex, "left");
});

photosPreviousBtn.addEventListener('click', () => {
    imagesIndex--;
    if(imagesIndex <= 0){
        imagesIndex = images.length - 1;
    }
    removeImage("right");
    img = createImage(images, imagesIndex, "right");
});