function drawTriangle(height) {
    if (height <= 0)
        console.log("Error");
    else {
        for (var i = 1; i <= height; i++) {
            var output = '';
            for (var j = 1; j <= i; j++)
                output += '$';
            console.log(output)
        }
    }
}

drawTriangle(6);