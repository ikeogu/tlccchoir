////////// TOGGLE MOBILE MENU //////////

var hamburgerMenu = document.querySelector("#hamburger-menu");
var menuNav = document.querySelector(".nav-menu nav");

hamburgerMenu.addEventListener("click", function () {
  menuNav.classList.toggle("menu-visible");
});

////////// TOGGLE BACKGROUND ON SCROLL //////////

var nav = document.querySelector(".nav-menu");
var header = document.querySelector(".header-info");

window.addEventListener("scroll", function () {
  if (window.pageYOffset > header.clientHeight - 50) {
    nav.classList.add("bg-grey");
  } else {
    nav.classList.remove("bg-grey");
  }
});

////////// MOVING THE CAROUSEL EVERY INTERVAL //////////

var slideIndex = 1;
var profiles = document.querySelectorAll(".profiles article");
var indicators = document.querySelectorAll(".indicators div");
var timeOut = setInterval(carousel, 4000);

function carousel() {
  for (i = 0; i < profiles.length; i++) {
    indicators[i].classList.remove("active");
    profiles[i].classList.remove("profile-active");
  }

  profiles[slideIndex].classList.add("profile-active");
  indicators[slideIndex].classList.add("active");

  slideIndex = (slideIndex += 1) % profiles.length;
}

function changeInfo(n) {
  slideIndex = n;
  carousel();
}

////////// FILTER IMAGES WHEN CLICKING GALLERY BUTTON //////////

var galleryImages = document.querySelectorAll("#gallery .imgs section");
var buttons = document.querySelectorAll(".gallery--btns button");
var all = document.querySelector(".btn-all");
var lorem = document.querySelector(".btn-lorem");
var dolar = document.querySelector(".btn-dolar");
var ipsum = document.querySelector(".btn-ipsum");

function filterImages(btn, class1, class2) {
  for (i = 0; i < galleryImages.length; i++) {
    btn.classList.add("btn-active");
    galleryImages[i].classList.remove("display-none");
    if (
      galleryImages[i].classList.contains(class1) ||
      galleryImages[i].classList.contains(class2)
    ) {
      galleryImages[i].classList.add("display-none");
    }
  }
}

function removeActiveBtn() {
  for (i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove("btn-active");
  }
}

all.addEventListener("click", function () {
  removeActiveBtn();
  for (i = 0; i < galleryImages.length; i++) {
    all.classList.add("btn-active");
    if (galleryImages[i].classList.contains("display-none")) {
      galleryImages[i].classList.remove("display-none");
    }
  }
});

lorem.addEventListener("click", function () {
  removeActiveBtn();
  filterImages(lorem, "dolar", "ipsum");
});

dolar.addEventListener("click", function () {
  removeActiveBtn();
  filterImages(dolar, "ipsum", "lorem");
});

ipsum.addEventListener("click", function () {
  removeActiveBtn();
  filterImages(ipsum, "dolar", "lorem");
});

////// TOGGLE IMAGE GALLERY MODAL ON CLICK //////

var galleryImgOverlays = document.querySelectorAll("#gallery .imgs section div");

var modalContainer = document.querySelector(".modal-background");

var allModalImgs = document.querySelector(".modal-gallery").children;
var modalImgsSrc = [...allModalImgs].map(({src}) => src);
var modalMainImg = document.querySelector(".img-main");

var modalClose = document.querySelector(".close-btn");
var modalImgPrev = document.querySelector(".prev-btn");
var modalImgNext = document.querySelector(".next-btn");

var imgIndex = 0;

var opacity = 0.4;

function resetOpacity() {
  for (i = 0; i < allModalImgs.length; i++) {
    allModalImgs[i].style.opacity = 1;
  }
}

document.querySelector("#gallery .imgs").addEventListener("click", function (e) {
  for (i = 0; i < galleryImgOverlays.length; i++) {
    if (e.target == galleryImgOverlays[i]) {
      resetOpacity();
      modalContainer.style.display = "block";
      imgIndex = parseInt(e.target.dataset.index);
      modalMainImg.src = modalImgsSrc[imgIndex];
    }
  }
})

for (i = 0; i < allModalImgs.length; i++) {
  allModalImgs[i].addEventListener("click", function (e) {
    resetOpacity();
    modalMainImg.src = e.target.src;
    e.target.style.opacity = opacity;
  });
}

modalClose.addEventListener("click", function () {
  modalContainer.style.display = "none";
});

////// CLICK THROUGH GALLERY WITH RESPONSIVE BUTTONS //////

modalImgNext.addEventListener("click", function () {
  imgIndex = (imgIndex += 1) % modalImgsSrc.length;
  modalMainImg.src = modalImgsSrc[imgIndex];
});

modalImgPrev.addEventListener("click", function () {
  imgIndex = (imgIndex -= 1);
  if (imgIndex < 0) {
    imgIndex = modalImgsSrc.length - 1;
  }
  modalMainImg.src = modalImgsSrc[imgIndex];
});