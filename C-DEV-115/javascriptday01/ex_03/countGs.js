function countGs(str) {
    let nb = 0;
    for (let i = 0; i < str.length; i++)
        if (str[i] == 'G')
            nb++;
    return nb;
}

console.log(countGs("abcgGggGeaGfdsGG"));