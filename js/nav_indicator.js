const activePage = window.location.pathname;
const navLinks = document.querySelectorAll(".navbar__link");

navLinks.forEach((link) => {
  if (link.href.includes(`${activePage}`)) {
    console.log(link);
    link.classList.add("active");
  }
});
