  /**
*
* email-signup.js
* This JS helps our newsletter email signup, which is now in the footer on every page. It relies in jQuery.
*
**/

function validateEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

var submitForm = function(data) {
  // Get the form button
  // var button = data[0][6];
  // Make the form button show a loading state
  // $(button).addClass('button-progress');
  // Send the request
    $.ajax({
        url: data.attr('action'),
        data: data.serialize(),
        cache       : false,
        dataType    : 'jsonp',
        jsonp       : 'c',
        contentType: "application/json-p; charset=utf-8",
        error       : function(err) {
          console.log("Could not connect to the registration server. Please try again later.");
            var error = '<strong>There was a problem connecting to the server:</strong><br />' + err.msg;
            // $(button).removeClass('button-progress');
            var failure = '<strong>There was a problem</strong><br />' + response.msg;
            $('#email-signup-error').html(failure);
            $('#email-signup-error').show();
        },
        success     : function(response) {
          console.log( response.result );
            if (response.result != "success") {
              if(response.result === "error"){
                console.log( response.msg );
                $('.contactform .container.container-ovr').html('<h3 style="color:white;">'+response.msg+'</h3>');
                $('.bodycover').css('display','block');
                $('.contactform').css('display','block');
              }
              // Something went wrong, display an error (response.msg)
              // If the message is something we expect, rewrite it a bit
              if (response.msg[0] == "0") { response.msg = "Please make sure you fill out all fields. It looks like you're missing something." }
              var failure = '<strong>There was a problem</strong><br />' + response.msg;
              // $(button).removeClass('button-progress');
              $('#email-signup-error').html(failure);
              $('#email-signup-error').show();
            } else {
              $('.contactform .container.container-ovr').html('<h3 style="color:white;">Thank you!</h3><h3 style="color:white;">Almost done. We just need to confirm your email address. Please click on the link in the email we just sent you.</h3>');
              $('.bodycover').css('display','block');
              $('.contactform').css('display','block');
                // It worked, let the user know
                // var success = '<h2>You did it</h2><p>' + response.msg + '</p><a href="#" class="button js-modal-exit">Close</a>';
                // $('.modal-content').html(success);
            // Push a pageview so we can track our funnel
        // ga('send', 'pageview', '/submit_email_signup_form');
            }
        }
    });
}


$(document).ready(function() {

  // Submit the modal form data
  $('#mc-embedded-subscribe-form').submit(function(e){
    // Prevent the submit
    e.preventDefault();
    // Todo: validation here

    // Get the form data
    var data = $('#mc-embedded-subscribe-form');

    if ( !data[0][0].value || !validateEmail(data[0][0].value) ) {
      alert('Please input a valid email.');
    } else {
      // Submit the form
      submitForm(data);
    }
  });
});