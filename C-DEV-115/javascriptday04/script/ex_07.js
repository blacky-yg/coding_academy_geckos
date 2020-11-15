window.addEventListener("load", () => {
    let canvas = document.querySelector("footer div canvas")
    window.ctx = canvas.getContext("2d");
    let audio = new Audio('triangle.ogg')
    let pause = document.getElementsByTagName("button")[0]
    let stop = document.getElementsByTagName("button")[1]
    let mute = document.getElementsByTagName("button")[2]

    if (canvas.getContext) {
        ctx.beginPath();
        ctx.moveTo(6, 6);
        ctx.lineTo(14, 10);
        ctx.lineTo(6, 14);
        ctx.closePath();
        ctx.lineWidth = 5;
        ctx.strokeStyle = '#666666';
        ctx.stroke();
        ctx.fillStyle = "#FFCC00";
        ctx.fill();
    }

    canvas.addEventListener("click", () => {
        audio.play()
    })

    pause.addEventListener("click", () => {
        audio.pause()
    })

    stop.addEventListener("click", () => {
        audio.pause()
        audio.currentTime = 0
    })

    mute.addEventListener("click", () => {
        if (audio.muted == true)
            audio.muted = false
        else
            audio.muted = true
    })
})