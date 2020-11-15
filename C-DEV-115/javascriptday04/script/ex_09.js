window.addEventListener("load", () => {
    let canvas = document.querySelector("footer div canvas")
    var BB = canvas.getBoundingClientRect();
    var offsetX = BB.left;
    var offsetY = BB.top;
    console.log(offsetX, offsetY)
    canvas.addEventListener("mousedown", function (evt) {
        clearCanvas();
        mouseDown = true;
        context.beginPath();
    }, false);
})