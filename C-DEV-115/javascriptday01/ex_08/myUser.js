module.exports = class myUser {
    constructor(name, age=42) {
        if (name)
            this.name = name;
        if (age >= 0)
            this.age = age;
    }

    printMe() {
        console.log("Hello, my name is " + this.name + " and I am " + this.age + " years old.");
    }
}