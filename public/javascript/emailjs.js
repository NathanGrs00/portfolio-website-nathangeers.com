(function() {
    emailjs.init({
        publicKey: "D25d4tqpGuc6a697G",
    });
})();

window.onload = function() {
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    // these IDs from the previous steps
    emailjs.sendForm('default_service', 'contact_form', this, '')
        .then(() => {
            console.log('SUCCESS!');
        }, (error) => {
            console.log('FAILED...', error);
        });
});
}