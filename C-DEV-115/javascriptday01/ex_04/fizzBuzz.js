function fizzBuzz() {
    for (let i = 1; i <= 20; i++) {
        if ((i % 5 != 0) && (i % 3 == 0))
            process.stdout.write("Fizz");
        else if ((i % 5 == 0) && (i % 3 == 0))
            process.stdout.write("FizzBuzz");
        else if ((i % 5 == 0) && (i % 3 != 0))
            process.stdout.write("Buzz");
        else
            process.stdout.write("" + i);
        if (i != 20)
            process.stdout.write(", ");
        else
            process.stdout.write("\n");
    }
}

fizzBuzz();