// Dark mode toggle
const checkbox = document.getElementById("checkbox");
const main = document.querySelector("main");
const mainPage = document.querySelector(".main-page");
const aboutUs = document.querySelector(".about-us");
const header = document.querySelector("header");
const navBar = document.querySelector(".nav");
const toggler = document.querySelector(".checkbox-label")
const footer = document.querySelector("footer");
const footerContainer = document.querySelector(".footer-container");

checkbox.addEventListener("change", () => {
    document.body.classList.toggle("dark");
    main.classList.toggle("dark");
    mainPage.classList.toggle("dark");
    aboutUs.classList.toggle("dark");
    header.classList.toggle("dark");
    navBar.classList.toggle("dark");
    toggler.classList.toggle("dark");
    footer.classList.toggle("dark");
    footerContainer.classList.toggle("dark");
});

// JQuery Gimmick
$(document).ready(function() {
    $("#catalog-nav").click(function() {
        alert("Maaf, fitur catalog belum ada!");
    });
})



