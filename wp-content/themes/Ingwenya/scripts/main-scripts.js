function toggleDesign(designs, toggle) {
    designs.forEach((design, i) => {
        if (i == toggle.value) {
            design.style.display = "block";
        }
        else design.style.display = "none";
    });
    console.log(designs);
    if (designs[0].localName == "header" && designs[2].style.display == "block") {
        body.style.width = "85%";
        body.style.marginLeft = "15%";
    }
    else if (designs[0].localName == "header") {
        body.style = "";
    }
}

const body = document.querySelector("body");
const navs = document.querySelectorAll("#navbar .design");
const navToggle = document.querySelector("#nav-toggle");
navToggle.addEventListener("change", () => toggleDesign(navs, navToggle));

const mainToggle = document.querySelector("#main-toggle");
if (mainToggle) {
    const mains = document.querySelectorAll("main .design");
    mainToggle.addEventListener("change", () => toggleDesign(mains, mainToggle));
}

const footers = document.querySelectorAll("footer .design");
const footerToggle = document.querySelector("#footer-toggle");
footerToggle.addEventListener("change", () => toggleDesign(footers, footerToggle));



const design1Nav = document.querySelector("#navbar #design1 nav");
const design1HeaderScroll = document.querySelector("#navbar #design1").scrollHeight - design1Nav.scrollHeight;
const design1Logo = document.querySelector("#navbar #design1 #logo");
const design1NavOl = document.querySelector("#navbar #design1 nav ol");
function design1NavScroll() {
    if (window.scrollY > (design1HeaderScroll - 50)) {
        design1Nav.style.position = "fixed";
        design1Nav.style.top = "0";
        design1Nav.style.bottom = "";
        design1Logo.style.position = "absolute";
        design1NavOl.style.width = "75%";
    }
    else {
        design1Nav.style.top = "";
        design1Nav.style.bottom = "0";
        design1Nav.style.position = "absolute";
        design1Logo.style.position = "fixed";
        design1NavOl.style.width = "100%";
    }
}

const design1 = document.querySelector("#navbar #design1");
document.onscroll = () => {
    if (design1.style.display == "block") design1NavScroll();
}
document.onload = () => {
    if (design1.style.display == "block") design1NavScroll();
}