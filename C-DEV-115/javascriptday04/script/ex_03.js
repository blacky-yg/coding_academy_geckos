window.addEventListener("load", () => {
    var selector = document.querySelector("footer div");
    selector.addEventListener("click", () => {
        var name = prompt("What is your name ?")
        if (name != null)
            if (confirm('Are you sure ' + name + ' is your name ?'))
                selector.innerHTML = "Hello " + name;
            else
                name = prompt("What is your name ?")
    })
})