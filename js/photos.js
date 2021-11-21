//------------------------------------------------ELEMENTS------------------------------------------------

const photosNextBtn = document.getElementById('photosNextBtn');
const photosPreviousBtn = document.getElementById('photosPreviousBtn');
const photoFrame = document.getElementById('photoFrame');
const allCounter = document.getElementById('allCounter');
const currentCounter = document.getElementById('currentCounter');

//------------------------------------------------VARIABLES------------------------------------------------

let imagesIndex = 0;
let img;
let wait = 0;
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
    if (direction == "left") {
        imgObject.style.left = "110vw";
    } else if (direction == "right") {
        imgObject.style.left = "-110vw";
    }
    photoFrame.appendChild(imgObject);
    setTimeout(() => {
        imgObject.style.left = "var(--photoSize)";
        currentCounter.innerHTML = imagesIndex+1;
    }, 300);
    return imgObject;
}

function removeImage(direction, imgObject) {
    setTimeout(() => {
        if (direction == "left") {
            imgObject.style.left = "110vw";
        } else if (direction == "right") {
            imgObject.style.left = "-110vw"
        }
    }, 150);
    if (imgObject) {
        setTimeout(() => {
            while (photoFrame.childNodes.length > 1) {
                photoFrame.removeChild(photoFrame.firstChild);
            }
        }, 30000);
    }
}

//------------------------------------------------INITIALIZATION------------------------------------------------

img = createImage(images, imagesIndex);
allCounter.innerHTML = images.length;

//------------------------------------------------SLIDESHOW------------------------------------------------

photosNextBtn.addEventListener('click', () => {
    if(wait == 0) {
        imagesIndex++;
        if (imagesIndex > images.length - 1) {
            imagesIndex = 0;
        }
        removeImage("left", img);
        img = createImage(images, imagesIndex, "right");
        wait = 1;
    }
    else{
        return;
    }
    setTimeout(() => {
        wait = 0;
    }, 1000);
});

photosPreviousBtn.addEventListener('click', () => {
    if(wait == 0) {
        imagesIndex--;
        if (imagesIndex < 0) {
            imagesIndex = images.length - 1;
        }
        removeImage("right", img);
        img = createImage(images, imagesIndex, "left");
        wait = 1;
    }
    else{
        return;
    }
    setTimeout(() => {
        wait = 0;
    }, 1000);
});