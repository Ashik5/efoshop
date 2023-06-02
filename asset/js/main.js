const userMenu = document.querySelector(".user-menu");
const userBtn = document.querySelector(".fa-user");
const mobileSearch = document.querySelector(".efoshop-mobile-searchbar");
const searchBtn = document.querySelector(".search-toggle-btn");
const searchSubmit = document.querySelector(".search-submit");
const menuBars = document.querySelector(".menu-bar");
const meghaMenu = document.querySelector(".header-inner");

//for user menu toggle
userBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const display = getComputedStyle(userMenu).display;
    if (display == "none") {
        userMenu.setAttribute("style", "display:flex");
    }
    else {
        userMenu.setAttribute("style", "display:none");
    }
})
// for mobile search menu toggle
searchBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const display = getComputedStyle(mobileSearch).display;
    if (display == "none") {
        mobileSearch.setAttribute("style", "display:flex");
    }
    else {
        mobileSearch.setAttribute("style", "display:none");
    }
})
searchSubmit.addEventListener('click', (e) => {
    e.preventDefault();
    const display = getComputedStyle(mobileSearch).display;
    if (display == "none") {
        mobileSearch.setAttribute("style", "display:flex");
    }
    else {
        mobileSearch.setAttribute("style", "display:none");
    }
})

// mobile devicce mega menu toogle
menuBars.addEventListener('click', (e) => {
    e.preventDefault();
    const display = getComputedStyle(meghaMenu).display;
    console.log("fuck");
    if (display == "none") {
        meghaMenu.setAttribute("style", "display:flex");
    }
    else {
        meghaMenu.setAttribute("style", "display:none");
    }
})