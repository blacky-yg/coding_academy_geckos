window.addEventListener("load", () => {
    var btn_plus = document.getElementsByTagName('button')[0]
    var btn_minus = document.getElementsByTagName('button')[1]
    var size = 16
    var opt = document.querySelector("footer div select")
    var div = document.querySelector("footer div")
    btn_plus.addEventListener("click", () => {
        document.body.style.fontSize = size++ + "px"
    })
    btn_minus.addEventListener("click", () => {
        document.body.style.fontSize = size-- + "px"
    })
    opt.onclick = (event) => {
        div.style.backgroundColor = opt.value
    }
})