const slider = document.querySelector("#main1 #product-slider #slide #wrap");
document.querySelector("#main1 #product-slider #left-arrow").addEventListener("click", () => {
    slider.style.left = "0";
});
document.querySelector("#main1 #product-slider #right-arrow").addEventListener("click", () => {
    slider.style.left = "-25%";
});
function productsToggle(toggle, products) {
    products.forEach(product => {
        if (product.classList.contains(toggle) || toggle == "all") {
            product.classList.remove("hide");
        }
        else {
            product.classList.add("hide");
        }
    })
}

const main3Products = document.querySelectorAll("#main3 #products #product-row .product");
document.querySelector("#main3 #products #toggle #filter").addEventListener("change", e => {
    productsToggle(e.target.value, main3Products);
});

const main2Products = document.querySelectorAll("#main2 #products #product-container #product-row .product");
document.querySelectorAll("#main2 #products #product-container #toggles a").forEach(toggle => {
    toggle.addEventListener("click", e => {
        productsToggle(e.target.id, main2Products);
    })
});

function main2ProjectsToggle(id) {
    document.querySelectorAll("#main2 #projects #info .project-info").forEach(info => {
        if (info.id == id) {
            info.classList.add("show");
        }
        else {
            info.classList.remove("show");
        }
    })
}
document.querySelectorAll("#main2 #projects #map .project").forEach(toggle => {
    toggle.addEventListener("click", e => {
        main2ProjectsToggle(e.currentTarget.id.charAt(7))
    });
})