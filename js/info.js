// accordion loop for information on project cards
for (let i = 1; i <= 4; i++) {
    document.querySelector(`.info_tab_${i} h4`).addEventListener("click", function () {
        document.querySelector(`.content-container-${i}`).classList.toggle("show");
    });
}