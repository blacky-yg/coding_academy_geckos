class Hero {
    constructor(name, type, magic, stength) {
        this.name = name
        this.type = type
        this.magic = magic
        this.stength = stength
    }

    toString() {
        if (this.type == "mage")
            return "I am " + this.name.charAt(0).toUpperCase() + this.name.slice(1) + " the wizard, I have " + this.magic + " points in Magic and " + this.stength + " in Stength !\n"
        if (this.type == "guerrier")
            return "I am " + this.name.charAt(0).toUpperCase() + this.name.slice(1) + " the Warrior, I have " + this.magic + " points in Magic and " + this.stength + " in Stength !\n"
    }
}

var mage = new Hero("amadeus", "mage", 10, 3);
var guerrier = new Hero("pontius", "guerrier", 3, 10);
window.addEventListener("load", () => {
    let div = document.querySelector("footer div")
    div.innerHTML = mage.toString()
    div.innerHTML += guerrier.toString()
})
