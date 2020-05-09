const button = document.querySelector(".button");
const content1 = document.querySelector(".content1");
const content2 = document.querySelector(".content2");
const content3 = document.querySelector(".content3");
const content4 = document.querySelector(".content4");
const content5 = document.querySelector(".content5");
const content6 = document.querySelector(".content6");
const header = document.querySelector(".header");
const container = document.querySelector(".container");
const row = document.querySelector(".row");
const footer = document.querySelector(".footer");
const cuter = document.querySelector(".cuter");

button.addEventListener("click", function() {
  content1.classList.add("style");
  content2.classList.add("style");
  content3.classList.add("style");
  content4.classList.add("style");
  content5.classList.add("style");
  content6.classList.add("style");
  cuter.classList.add("cutStyle");
  row.classList.add("rowStyle");
  header.classList.add("headStyle");
  container.classList.add("containerStyle");
  footer.classList.add("footerStyle");
  button.style.display = "none";
});
