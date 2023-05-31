const baritemsClick = document.querySelector('.bar-icons');
const catagoriesElement = document.querySelector('.cat-nav-head');
const innerHeadingElement = document.querySelector('.header-inner');
const SearchIconsElement = document.querySelector('.searchI');
const searchElement = document.querySelector('.search-bar');

baritemsClick.addEventListener('click', (e) => {
  e.preventDefault();
  let value = true;
  if (value) {
    catagoriesElement.classList.toggle('active');
    innerHeadingElement.classList.toggle('active');
    searchElement.classList.remove('active');
  }
});

SearchIconsElement.addEventListener('click', (e) => {
  e.preventDefault();

  if (true) {
    catagoriesElement.classList.remove('active');
    searchElement.classList.toggle('active');
    innerHeadingElement.classList.remove('active');
  }
});

let mainCatagoryElement = document.querySelectorAll('.mainLiList');

//// FOrLoop

for (let i = 0; i < mainCatagoryElement.length; i++) {
  mainCatagoryElement[i].addEventListener('click', function () {
    for (let j = 0; j < mainCatagoryElement.length; j++) {
      mainCatagoryElement[j].classList.remove('active');
    }
    mainCatagoryElement[i].classList.add('active');
  });
}

//

let sublist = document.querySelectorAll('.sublist');

for (let i = 0; i < sublist.length; i++) {
  sublist[i].addEventListener('click', function () {
    for (let j = 0; j < sublist.length; j++) {
      sublist[j].classList.remove('active');
    }
    sublist[i].classList.add('active');
  });
}
