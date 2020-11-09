function arrayIsEqual(arr1, arr2) {
    if (arr1 instanceof Array && arr2 instanceof Array) {
        if (arr1.length != arr2.length)
            return false;
        for (var i = 0; i <= arr1.length; i++)
            if (a[i] != b[i])
                return false;
        return true;
    } else
        return arr1 == arr2;
}

var a = [1, 2];
var b = [1, 3];

console.log(arrayIsEqual(a, b));