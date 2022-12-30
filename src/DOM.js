const sidebar = document.querySelector("#sidebar"),
      sidebarMenu = document.querySelector("#sidebar-menu"),
      menu = document.querySelector("#menu"),
      dropContent = document.querySelector("#drop-content"),
      dropdown = document.querySelector("#dropdown"),
      dropdown2 = document.querySelector("#dropdown2"),
      dropContent2 = document.querySelector("#drop-content2"),
      bodyScroll = document.body

menu.addEventListener("click", () => {
	sidebar.classList.toggle("sm:hidden")
    sidebarMenu.classList.toggle("sm:hidden")
    bodyScroll.classList.toggle("sm:overflow-y-hidden")
});

dropdown.addEventListener("click", () => {
    dropContent.classList.toggle("sm:hidden")
    dropdown.classList.toggle("mb-4")
})

dropdown2.addEventListener("click", () => {
    dropContent2.classList.toggle("sm:hidden")
    dropdown2.classList.toggle("mb-4")
})