function sendEmail() {
    //Grab the email
    let email = document.getElementById("email").value;
    let the_modal = $('#the-modal');
    // Validate email
    if (isValidEmail(email)) {
        // Send the email
        axios.post('https://sheetdb.io/api/v1/nar3w3e698au9',{
            "data": {"email": email}
        }).then( response => {
            if (response.data["created"] == 1) {
                // document.getElementById("status").innerText = "Success";
                $('.modal-title')[0].innerText = "Email sent successfully";
                $('.modal-body')[0].innerText = "Thank you. You will hear from us.";
                the_modal.modal();
            } else {
                // document.getElementById("status").innerText = "Failure";
                $('.modal-title')[0].innerText = "Email wasn't sent";
                $('.modal-body')[0].innerText = "Sorry, something went wrong";
                the_modal.modal();
            }
        });
    } else {
        // console.log($('.modal-body')[0].innerText);
        $('.modal-title')[0].innerText = "Invalid Email";
        $('.modal-body')[0].innerText = "Please enter a valid email";
        the_modal.modal();
    }
}

function isValidEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
        return true;
    }
    
    return false;
}


