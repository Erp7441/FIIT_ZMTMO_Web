//------------------------------------------------ELEMENTS------------------------------------------------

const rootElement = document.documentElement;
const bodyElement = document.body;
const logo = document.getElementById('logo');
const sideMenu = document.getElementById('sideMenu');
const navBtn = document.getElementById('navBtn');
const navBtnImg = document.getElementById('navBtnImg');
const langBtn = document.getElementById('langBtn');
const themeSwitchInput = document.getElementById('themeSwitchInput');
const themeSwitch = document.getElementById('themeSwitch');
const osTheme = window.matchMedia('(prefers-color-scheme: dark)');
const background = document.getElementById('background');

//------------------------------------------------FUNCTIONS-----------------------------------------------

function updateTheme(){
    if(themeSwitchInput.checked) {
        rootElement.style.setProperty("--mainColor", "rgb(24, 26, 27, 0.9)");
        rootElement.style.setProperty("--secondaryColor", "rgb(232, 230, 227)");
        rootElement.style.setProperty("--contentBG", "rgb(24, 26, 27, 0.5)");
        rootElement.style.setProperty("--accents", "100%");
        background.style.setProperty("filter", "invert(0%) grayscale(0%) blur(2px)");
    }
    else{
        rootElement.style.setProperty("--mainColor", "rgb(232, 230, 227, 0.9)");
        rootElement.style.setProperty("--secondaryColor", "rgb(24, 26, 27)");
        rootElement.style.setProperty("--contentBG", "rgb(232, 230, 227, 0.5)");
        rootElement.style.setProperty("--accents", "0%");
        background.style.setProperty("filter", "invert(100%) grayscale(200%) blur(2px)");
    }
}

//------------------------------------------------INITIALIZATION------------------------------------------------

sideMenu.style.left = "-250px";
themeSwitchInput.checked = osTheme.matches; updateTheme();

//------------------------------------------------SIDE MENU------------------------------------------------

osTheme.addEventListener('change', (event) => {
    themeSwitchInput.checked = event.matches;
    updateTheme();
});

navBtn.addEventListener('click', () => {
    if(sideMenu.style.left == "-250px"){
        sideMenu.style.left = "0";
        navBtnImg.src = "images/icons/close.png";
    }
    else{
        sideMenu.style.left = "-250px";
        navBtnImg.src = "images/icons/menu.png";
    }
});

langBtn.addEventListener('click', () => { location.href="index_en.html"; });
themeSwitch.addEventListener('click', updateTheme);

// TODO Ulož switch state do local storage