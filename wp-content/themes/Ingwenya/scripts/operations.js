const projects1 = document.querySelectorAll("#projects1 #project-row .project");
const toggles1 = document.querySelectorAll("#projects1 #toggles select");
toggles1.forEach(toggle => {
    toggle.addEventListener("change", () => {
        const location = toggles1[0].value;
        const capacity = toggles1[1].value;
        const type = toggles1[2].value;
        projects1.forEach(project => {
            const isLocation = project.classList.contains(location) || location == "all";
            const isCapacity = project.classList.contains(capacity) || capacity == "all";
            const isType = project.classList.contains(type) || type == "all";
            if (isLocation && isCapacity && isType) {
                project.classList.add("show");
            }
            else {
                project.classList.remove("show")
            }
        })
    })
});
