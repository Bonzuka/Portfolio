function dipGreeting() {
    var person = prompt("Hi, what is your name", "....");
    alert(timeOfTheDay() + " " + person + "! welcome to my site");

}

function timeOfTheDay() {
    var h = new Date();
    h = h.gethours();
    if (h >= 5 && h < 12) {
        return "Good morning";
    }
    else if (h >= 12 && h < 18) {
        return "Good Afternoon";
    }
    else {
        return "Good Evening";
    }
}