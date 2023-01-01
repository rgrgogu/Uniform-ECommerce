const sidebarMobile = document.querySelector("#sidebar"),
  sidebarDesktop = document.querySelector("#sidebar-desktop"),
  sidebarMenu1 = document.querySelector("#menu-desktop"),
  sidebarMenu2 = document.querySelector("#menu-mobile"),
  menu = document.querySelector("#menu"),
  dropContent = document.querySelector("#drop-content"),
  dropdown = document.querySelector("#dropdown"),
  dropdown2 = document.querySelector("#dropdown2"),
  dropContent2 = document.querySelector("#drop-content2"),
  bodyScroll = document.body;

sidebarMenu1.addEventListener("click", () => {
  sidebarDesktop.classList.toggle("sm:hidden");
  bodyScroll.classList.toggle("sm:overflow-y-hidden");
});
sidebarMenu2.addEventListener("click", () => {
  sidebarMobile.classList.toggle("sm:hidden");
  bodyScroll.classList.toggle("sm:overflow-y-hidden");
});

dropdown.addEventListener("click", () => {
  dropContent.classList.toggle("sm:hidden");
  dropdown.classList.toggle("mb-4");
});

dropdown2.addEventListener("click", () => {
  dropContent2.classList.toggle("sm:hidden");
  dropdown2.classList.toggle("mb-4");
});

function addCart(){
  alert("Item added 🥰");
};

const checkout = () => {
  alert("Checkout successfully! 🥰") ||
    window.location.replace("checkout.html");
};
