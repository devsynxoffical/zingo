const trailElement = document.querySelector('#trail_form');

const alertElement = document.querySelector('#alert');

trailElement.addEventListener('submit', async function(e) {
    e.preventDefault();

    const emailElement = document.querySelector('#email');
    const phoneElement = document.querySelector('#phone');
    const messageElement = document.querySelector('#message');

    let emailElementValue = emailElement.value;
    let phoneElementValue = phoneElement.value;
    let messageElementValue = messageElement.value;

    emailElement.style.borderColor='';
    phoneElement.style.borderColor='';
    messageElement.style.borderColor='';


    if (emailElementValue == '' || emailElementValue === undefined) {
        emailElement.style.borderColor='red';
    }
    if (phoneElementValue == '' || phoneElementValue === undefined) {
        phoneElement.style.borderColor='red';
    }
    if (messageElementValue == '' || messageElementValue === undefined) {
        messageElement.style.borderColor='red';
    }
    if (emailElementValue != '' || phoneElementValue != '' || messageElementValue != '') {

        const data = {
            email: emailElementValue,
            phone: phoneElementValue,
            message: messageElementValue,
        }

        const response = await fetch(sendTrailEmailRoute, {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json',
            }
        });

        const result = await response.json();

        console.log(result);


        alertElement.innerHTML = '';

        if (result.errors) {
            alertElement.innerHTML = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Fill the required blanks </strong> .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
        }
        if (result.success) {

            emailElement.value = '';
            phoneElement.value = '';
            messageElement.value = '';

            hidePopup();
        }

        if (result.failure) {
            alertElement.innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>something went wrong!</strong> .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
        }

    }

});




