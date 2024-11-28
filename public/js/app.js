window.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#email_send_form');
    const submitButton = document.querySelector('#submit_email');
    const email = document.querySelector('#email');
    const subject = document.querySelector('#subject');
    const message = document.querySelector('#message');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
    });

    

    console.log('oi');
})


