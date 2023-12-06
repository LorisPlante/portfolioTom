let prevScrollPos = window.scrollY || document.documentElement.scrollTop;

// ---------- scroll down header desktop ----------

window.onscroll = function () {
  const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

  if (prevScrollPos > currentScrollPos) {
    document.getElementById("nav-desktop").style.top = "0";
  } else {
    document.getElementById("nav-desktop").style.top = "-110px";
  }

  prevScrollPos = currentScrollPos;
};

//--------------- MENU ---------------

const burger_open = document.getElementById("burger_open");
const burger_close = document.getElementById("burger_close");
const nav_mobile = document.getElementById("nav-mobile");
const menu = document.getElementById("menu");
const close_menu = document.getElementById("close-menu");

function toggleMenu() {
  burger_open.classList.toggle("block");
  burger_open.classList.toggle("hidden");
  burger_close.classList.toggle("block");
  burger_close.classList.toggle("hidden");
  menu.classList.toggle("left-[-110%]");
  menu.classList.toggle("left-0");
  close_menu.classList.toggle("hidden");
  close_menu.classList.toggle("block");
}
