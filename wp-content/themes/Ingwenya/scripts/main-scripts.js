function toggleDesign(designs, toggle) {
    designs.forEach((design, i) => {
        if (i == toggle.value) {
            design.style.display = "block";
        }
        else design.style.display = "none";
    });
}

const mains = document.querySelectorAll("main .design");
const toggle = document.querySelector("main #main-toggle");
toggle.addEventListener("change", () => {
    toggleDesign(mains, toggle);
});