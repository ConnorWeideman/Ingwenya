let gallerytoggle = true;
const gallery = document.querySelector("#bomax #gallery");
const arrow = document.querySelector("#bomax #img #expand #arrow");
document.querySelector("#bomax #img #expand").addEventListener("click", () => {
    if (gallerytoggle) {
        gallery.style.display = "block";
        arrow.firstElementChild.style.transform = "rotate(180deg)";
    }
    else {
        gallery.style.display = "none";
        arrow.firstElementChild.style.transform = "none";
    }
    gallerytoggle = !gallerytoggle;
});