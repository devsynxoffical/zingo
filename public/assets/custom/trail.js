const trailElement = document.querySelector('#trail_form');

const alertElement = document.querySelector('#trail_alert');

if (trailElement) trailElement.addEventListener('submit', async function(e) {
    e.preventDefault();

    const emailElement = trailElement.querySelector('#trail_email');
    const phoneElement = trailElement.querySelector('#trail_phone');
    const messageElement = trailElement.querySelector('#trail_message');

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
            window.zingoTrack && window.zingoTrack('generate_lead', { form_id: 'free_trial', page_path: location.pathname });

            emailElement.value = '';
            phoneElement.value = '';
            messageElement.value = '';

            alertElement.innerHTML = `<div class="alert alert-success" role="alert">
            <strong>Thank you!</strong> Your free trial request was received. Our team will contact you within 24 hours.
            </div>`;
            setTimeout(function () { alertElement.innerHTML = ''; hidePopup(); }, 4000);
        }

        if (result.failure) {
            alertElement.innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>something went wrong!</strong> .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
        }

    }

});




