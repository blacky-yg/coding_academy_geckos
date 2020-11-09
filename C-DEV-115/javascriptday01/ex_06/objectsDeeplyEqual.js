function objectsDeeplyEqual(v1, v2) {
    if (typeof(v1) !== typeof(v2))
        return false;
    else if (v1 instanceof Object && v2 instanceof Object) {
        if (countProps(v1) !== countProps(v2))
            return false;
        for (k in v1)
            if (!objectsDeeplyEqual(v1[k], v2[k]))
                return false;
        return true;
    } else
        return v1 === v2;
}

function countProps(obj) {
    var count = 0;
    for (k in obj)
        if (obj.hasOwnProperty(k))
            count++;
    return count;
};

var obj = {
    here: {is: "an"},
    object: 2
};

console.log(objectsDeeplyEqual(obj, obj));
console.log(objectsDeeplyEqual(obj, {here: 1, object: 2}));
console.log(objectsDeeplyEqual(obj, {here: {is: "an"}, object: 2}));