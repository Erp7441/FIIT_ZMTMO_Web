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

function getCookie(menoCookie) {
    let meno = menoCookie + "=";
    let cookie = decodeURIComponent(document.cookie);
    let cookieSplit = cookie.split(';');
    for(let i = 0; i < cookieSplit.length; i++) {
        let tmpCookie = cookieSplit[i];
        while (tmpCookie.charAt(0) == ' ') {
            tmpCookie = tmpCookie.substring(1);
        }
        if (tmpCookie.indexOf(meno) == 0) {
            return tmpCookie.substring(meno.length, tmpCookie.length);
        }
    }
    return null;
}

function updateLang(){
    let lang = getCookie("lang");
    if(lang == null){
        document.cookie = "lang=sk;SameSite=Lax";
    }
    else if (lang != null){
        if(lang == "sk"){
            document.cookie = "lang=en;SameSite=Lax";
        }
        else if(lang == "en"){
            document.cookie = "lang=sk;SameSite=Lax";
        }
    }
}

function showSideMenu(){
    sideMenu.style.left = "0";
    navBtn.style.position = "fixed";
    navBtnImg.src = "images/icons/close.png";
}

function hideSideMenu(){
    sideMenu.style.left = "calc(-1*var(--navSize))";
    navBtn.style.position = "absolute";
    navBtnImg.src = "images/icons/menu.png";
}

function updateSideMenu(){
    if(localStorage.getItem("sideMenu") == 'true'){
        showSideMenu();
    }
    else if(localStorage.getItem("sideMenu") == 'false'){
        hideSideMenu();
    }
}

//------------------------------------------------INITIALIZATION------------------------------------------------

document.addEventListener("DOMContentLoaded", () => {
    
    if (localStorage.getItem("sideMenu") === null) localStorage.setItem("sideMenu", 'false');
    updateSideMenu();

    if (localStorage.getItem("themeSetting") === null) localStorage.setItem("themeSetting", osTheme.matches);
    themeSwitchInput.checked = JSON.parse(localStorage.getItem("themeSetting")); updateTheme();
})


//------------------------------------------------SIDE MENU------------------------------------------------

osTheme.addEventListener('change', (event) => {
    themeSwitchInput.checked = event.matches;
    localStorage.setItem("themeSetting", themeSwitchInput.checked);
    updateTheme();
});

navBtn.addEventListener('click', () => {
    if(localStorage.getItem("sideMenu") == 'true'){
        localStorage.setItem("sideMenu", 'false');
    }
    else if(localStorage.getItem("sideMenu") == 'false'){
        localStorage.setItem("sideMenu", 'true');
    }
    updateSideMenu()
});

langBtn.addEventListener('click', () => {
    updateLang();
    window.location.reload();
});

themeSwitch.addEventListener('click', () => {
    localStorage.setItem("themeSetting", themeSwitchInput.checked);
    updateTheme();
});