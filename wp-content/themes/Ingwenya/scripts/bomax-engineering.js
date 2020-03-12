let gallerytoggle = true;
const gallery = document.querySelector("#bomax #gallery");
const arrows = document.querySelectorAll("#bomax .img .expand .arrow");
document.querySelectorAll("#bomax .img .expand").forEach(expand => {
    expand.addEventListener("click", () => {
        if (gallerytoggle) {
            gallery.style.display = "block";
            arrows.forEach(arrow => {
                arrow.firstElementChild.style.transform = "rotate(180deg)";
            });
        }
        else {
            gallery.style.display = "none";
            arrows.forEach(arrow => {
                arrow.firstElementChild.style.transform = "none";
            });
        }
        gallerytoggle = !gallerytoggle;
    });
});