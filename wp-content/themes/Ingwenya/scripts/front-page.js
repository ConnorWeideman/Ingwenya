const slider = document.querySelector("#navbar #design3 #header #wrap");
const buttons = document.querySelectorAll("#navbar #design3 #header #header-controls input");
let left = 0;
let id;

function slide() {
    console.log("slide");
    if (left == 4) {
        left = -1;
    }
    window.requestAnimationFrame(() => {
        slider.style.left = "-" + (left * 100) + "%";
    });
    left += 1;
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].checked = false;
        if (left == i) {
            buttons[i].checked = true;
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    id = window.setInterval(slide, 5000);
});

buttons.forEach(button => {
    button.addEventListener("click", () => {
        window.clearInterval(id);
        left = parseInt(button.id);
        slide();
        id = window.setInterval(slide, 5000);
    });
});