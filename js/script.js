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

sideMenu.style.left = "calc(-1*var(--navSize))";

if (localStorage.getItem("themeSetting") === null) {
    localStorage.setItem("themeSetting", osTheme.matches);
}
themeSwitchInput.checked = JSON.parse(localStorage.getItem("themeSetting")); updateTheme();

//------------------------------------------------SIDE MENU------------------------------------------------

osTheme.addEventListener('change', (event) => {
    themeSwitchInput.checked = event.matches;
    localStorage.setItem("themeSetting", themeSwitchInput.checked);
    updateTheme();
});

navBtn.addEventListener('click', () => {
    if(sideMenu.style.left == "calc(-1*var(--navSize))"){
        sideMenu.style.left = "0";
        navBtn.style.position = "fixed";
        navBtnImg.src = "images/icons/close.png";
    }
    else{
        sideMenu.style.left = "calc(-1*var(--navSize))";
        navBtn.style.position = "absolute";
        navBtnImg.src = "images/icons/menu.png";
    }
});

langBtn.addEventListener('click', () => {
    let currentPage = window.location.pathname;
    let wantedPage = currentPage.split("/").pop();
    wantedPage = wantedPage.split(".");
    wantedPage.splice(1, 0, ".");

    if(!currentPage.includes("_en")){
        wantedPage.splice(1, 0, "_en");
    }
    else{
        wantedPage[0] = wantedPage[0].replace("_en", "");
    }
    window.location.href = wantedPage.join("");
});

themeSwitch.addEventListener('click', () => {
    localStorage.setItem("themeSetting", themeSwitchInput.checked);
    updateTheme();
});