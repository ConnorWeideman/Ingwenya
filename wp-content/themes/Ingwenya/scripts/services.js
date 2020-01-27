document.querySelectorAll("#products1 #product-row .product").forEach(product => {
    let toggle = true;
    const p = product.children[1].children[1];
    product.addEventListener("click", e => {
        if (toggle) {
            product.classList.add("expand");
            p.style.display = "block";
        }
        else {
            product.classList.remove("expand");
            p.style.display = "";
        }
        toggle = !toggle;
    })
})

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

const products1Products = document.querySelectorAll("#products1 #product-row .product");
document.querySelector("#products1 #toggle #filter").addEventListener("change", e => {
    productsToggle(e.target.value, products1Products);
});
