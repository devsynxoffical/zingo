const contactFormElement = document.querySelector("#contact-form");

contactFormElement.addEventListener('submit', async function (event) {
    event.preventDefault();

    const nameElement = document.querySelector('#name');
    const emailElement = document.querySelector('#email');
    const phoneElement = document.querySelector('#phone');
    const serviceElement = document.querySelector('#service');
    const messageElement = document.querySelector('#message');
    const alertElement = document.querySelector('#alert');

    let nameElementValue = nameElement.value;
    let emailElementValue = emailElement.value;
    let phoneElementValue = phoneElement.value;
    let messageElementValue = messageElement.value;
    let serviceElementValue = serviceElement.value;

    // console.log(nameElementValue)
    // console.log(emailElementValue)
    // console.log(phoneElementValue)
    // console.log(messageElementValue)
    // console.log(serviceElementValue)

    nameElement.style.borderColor='';
    emailElement.style.borderColor='';
    phoneElement.style.borderColor='';
    serviceElement.style.borderColor='';
    messageElement.style.borderColor='';

    if (nameElementValue == '' || nameElementValue === undefined) {
        nameElement.style.borderColor='red';
    }
    if (emailElementValue == '' || emailElementValue === undefined) {
        emailElement.style.borderColor='red';
    }
    if (phoneElementValue == '' || phoneElementValue === undefined) {
        phoneElement.style.borderColor='red';
    }
    if (messageElementValue == '' || messageElementValue === undefined) {
        messageElement.style.borderColor='red';
    }
    if (serviceElementValue == '' || serviceElementValue === undefined) {
        serviceElement.style.borderColor='red';
    }
    if (nameElementValue != '' || emailElementValue != '' || phoneElementValue != '' || serviceElementValue != '' || messageElementValue != '') {

        const data = {
            name: nameElementValue,
            email: emailElementValue,
            phone: phoneElementValue,
            service: serviceElementValue,
            message: messageElementValue,
        }

        const response = await fetch(sendEmailRoute, {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json',
            }
        });

        const result = await response.json();

        console.log(result);


        // alertElement.innerHTML = '';

        if (result.errors) {
            alertElement.innerHTML = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Fill the required blanks </strong> .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
        }
        if (result.success) {

            nameElement.value = '';
            emailElement.value = '';
            phoneElement.value = '';
            serviceElement.value = '';
            messageElement.value = '';

            // alertElement.innerHTML = '';
            const popup = document.getElementById('popup');
            const closeBtn = document.getElementById('closeBtn');

            popup.style.display = 'block';

            // Close popup when "X" is clicked
            closeBtn.addEventListener('click', function () {
                popup.style.display = 'none';
            });

            // Close popup when clicking outside the popup content
            window.addEventListener('click', function (event) {
                if (event.target == popup) {
                    popup.style.display = 'none';
                }
            });

        }
        if (result.failure) {
            alertElement.innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Email !</strong> not send please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
        }

    }

});




