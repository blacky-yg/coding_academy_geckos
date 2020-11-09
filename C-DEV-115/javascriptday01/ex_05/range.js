function range(start, end, step) {
    if (start === end) {
        return [start];
    } else if (start < end) {
        var a = [start], b = start;
        while (b < end)
            a.push(b += step || 1);
        return (b > end) ? a.slice(0,-1) : a;
    } else {
        var a = [start], b = start;
        while (b > end)
            a.push(b += step || 1);
        return a;
    }
}

console.log(range(1, 10, 2));
console.log(range(19, 22));
console.log(range(5, 2, -1));