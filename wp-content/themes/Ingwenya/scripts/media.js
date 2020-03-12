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
