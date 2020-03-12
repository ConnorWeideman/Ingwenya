function toggleDesign(designs, toggle) {
    designs.forEach((design, i) => {
        if (i == toggle.value) {
            design.style.display = "block";
        }
        else design.style.display = "none";
    });
}

const mains = document.querySelectorAll("main .design");
const toggle1 = document.querySelector("main #main-toggle");
if (toggle1) {
    toggle1.addEventListener("change", () => {
        toggleDesign(mains, toggle1);
    });
}

let toggle = true;
const navbar = document.querySelector("#navbar nav");
const navToggle = document.querySelector("#navbar #nav-toggle");
navToggle.addEventListener("click", () => {
    if (toggle) {
        window.requestAnimationFrame(() => {
            navbar.style = "left: 0";
        });
    }
    else {
        window.requestAnimationFrame(() => {
            navbar.style = "";
        });
    }
    toggle = !toggle;
});