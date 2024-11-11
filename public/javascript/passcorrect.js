function toggleVisible() {
    const elements = document.getElementsByClassName("hiddenEdit");  // Get all elements with class "hiddenEdit"

    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.toggle("hiddenButton");
    }

    const second = document.getElementById("hiddenAdd");
    if (second) {
        second.classList.toggle("hiddenButton");
    }

    console.log("passcorrect.js has been loaded");
}
