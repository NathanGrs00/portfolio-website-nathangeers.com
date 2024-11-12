(function() {
    //Initiates the public key when loading the page.
    emailjs.init({
        publicKey: "D25d4tqpGuc6a697G",
    });
})();

window.onload = function() {
// When submitting the form, prevent the default working and sends the form through the template set in emailJS.
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    emailjs.sendForm('default_service', 'contact_form', this, '')
        .then(() => {
            alert("Your information has been send. I will get in contact with you shortly.")
        }, (error) => {
            console.log('FAILED...', error);
        });
});
}