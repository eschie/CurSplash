if( window.location.href.indexOf("?submitted") > -1 ) {
  var _emailMsg = '<h3 style=\"color:white;\">Thank you!</h3><h3 style=\"color:white;\">Thanks for getting in touch! Someone from our team will contact you as soon as we can.</h3>' ;
} else if (window.location.href.indexOf("?failed") > -1 ) {
  var _emailMsg = '<h3 style=\"color:white;\">Uh Oh!</h3><h3 style=\"color:white;\">There was a problem with our mail server. Please <a href=\"mailto:contact@cur.me?Subject=Contact%20Form%20Submission\" target=\"_top\">send us an email</a> and someone from our team will contact you as soon as we can.</h3>';
} else if (window.location.href.indexOf("?thankyou") > -1 ) {
  var _emailMsg = '<h3 style=\"color:white;text-align:left;\">We really appreciate you signing up early – and we’re thrilled about the volume of support we’ve seen so far.</h3><h3 style=\"color:white;text-align:left;\">We’re hard at work getting everything ready. We’ll be in touch with any new updates. In the meantime, please watch and share our <a href="https://www.youtube.com/watch?v=zd2spHXanUc">video</a>.</h3><h3 style=\"color:white;text-align:left;\">Cheers,<br/>Shaun, Kevin, Alex & Tan</h3>';
}

if( typeof _emailMsg != 'undefined' ) {
  $('.contactform .container.container-ovr').html(_emailMsg);
  $('.bodycover, .contactform').css('display','block');
}