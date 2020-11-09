function arrayFilter(array, test) {
    var arr = [];
    array.forEach(element => {
        if (test(element))
            arr.push(element);
    });
    return (arr);
}

var toFilter = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var passed = arrayFilter(toFilter, function (value) {
    return value % 3 === 0;
});
console.log(passed);