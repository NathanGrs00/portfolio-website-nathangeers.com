// Function to switch the display: none css property.
function toggleVisible() {
    // variable elements and second are set to the edit and add projects respectively.
    const elements = document.getElementsByClassName("hiddenEdit");

    //Toggle the class hiddenButton for each element in the array of const elements.
    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.toggle("hiddenButton");
    }

    //Same, but for the add project button.
    const second = document.getElementById("hiddenAdd");
    if (second) {
        second.classList.toggle("hiddenButton");
    }
    const third = document.getElementById("hiddenLogOut");
    if (third) {
        third.classList.toggle("hiddenButton");
    }
    const fourth = document.getElementById("shownButton");
    if (fourth){
        fourth.style.display = "none";
    }
}
