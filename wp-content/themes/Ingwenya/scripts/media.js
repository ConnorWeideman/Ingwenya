document.querySelectorAll("#news1 .expand").forEach(expand => {
    let mediaToggle = true;
    const arrow = expand.querySelector("i");
    expand.addEventListener("click", () => {
        if (mediaToggle) {
            expand.nextElementSibling.style.display = "block";
            arrow.style.transform = "rotate(180deg)";
        }
        else {
            expand.nextElementSibling.style.display = "none";
            arrow.style.transform = "none";
        }
        mediaToggle = !mediaToggle;
    });
});

const sections = document.querySelectorAll("#news2 > section");
document.querySelectorAll("#news2 #toggles a").forEach(toggle => {
    toggle.addEventListener("click", () => {
        sections.forEach(section => {
            section.style.display = "none";
            if (toggle.id == section.id) {
                section.style.display = "block";
            }
        });
    });
});