var nb = 0
window.addEventListener("load", () => {
    var selector = document.querySelector("footer div");
    selector.addEventListener("click", () => {
        selector.innerHTML = nb++
    })
})