(function() {
    //Initiates the public key when loading the page.
    emailjs.init({
        publicKey: "D25d4tqpGuc6a697G",
    });
})();

window.onload = function() {
    document.getElementById('contactForm').addEventListener('submit', function(event) {

        // Get the last submitted time from localStorage (in milliseconds)
        let lastSubmitTime = localStorage.getItem('lastSubmitTime');
        let currentTime = new Date().getTime();

        // If the last submit time exists and is less than an hour ago, prevent further submission
        if (lastSubmitTime && currentTime - lastSubmitTime < 60 * 60 * 1000) {
            alert('You can only submit the form once per hour.');
            return; // Prevent form submission
        }

        // Prevent the form from submitting the default way
        event.preventDefault();

        // Send the form via emailjs
        emailjs.sendForm('default_service', 'contact_form', this, '')
            .then(() => {
                alert("Your information has been sent. I will get in contact with you shortly.");

                // Save the current time as the last submitted time (only after success)
                localStorage.setItem('lastSubmitTime', currentTime);
            }, (error) => {
                console.log('FAILED...', error);
            });
    });
};
