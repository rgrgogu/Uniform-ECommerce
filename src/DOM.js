const sidebar = document.querySelector("#sidebar"),
      sidebarMenu = document.querySelector("#sidebar-menu"),
      menu = document.querySelector("#menu"),
      bodyScroll = document.body

menu.addEventListener("click", () => {
	sidebar.classList.toggle("sm:hidden")
    sidebarMenu.classList.toggle("sm:hidden")
    bodyScroll.classList.toggle("sm:overflow-y-hidden")
});