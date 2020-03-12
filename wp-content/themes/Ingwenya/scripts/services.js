document.querySelectorAll("#products1 #product-row .product").forEach(product => {
    let toggle = true;
    const p = product.querySelector(".info");
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
