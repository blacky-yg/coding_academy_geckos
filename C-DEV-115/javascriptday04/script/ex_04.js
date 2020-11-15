window.addEventListener("load", () => {
    var selector = document.querySelector("footer div");
    window.addEventListener("keypress", (e) => {
        var n = selector.textContent.length;
        if (n <= 42)
            selector.innerHTML += e.key
    })
})