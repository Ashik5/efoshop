const userMenu = document.querySelector(".user-menu");
const userBtn = document.querySelector(".fa-user");
const mobileSearch = document.querySelector(".efoshop-mobile-searchbar");
const searchBtn = document.querySelector(".search-toggle-btn");
const searchSubmit = document.querySelector(".search-submit");

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
