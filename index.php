<?php
include './php/ChromePhp.php';
include './php/validate.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>CUR | Professional pain therapy evolved into a patch.</title>
    <meta name="description" content="The most advanced pain relief made simple. No wires or bulky batteries. Try clinically proven electrical stimulation for faster, more effective pain relief.">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="CUR | Professional pain therapy evolved into a patch." />
    <meta property="og:image" content="images/video.png" />
    <meta property="og:url" content="http://www.cur.me" />
    <meta property="og:description" content="The most advanced pain relief made simple. No wires or bulky batteries. Try clinically proven electrical stimulation for faster, more effective pain relief." />
    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/skeleton.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.css">
    <link rel="stylesheet" href="./css/custom.css">
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="./images/favicons-t/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./images/favicons-t/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./images/favicons-t/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./images/favicons-t/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="./images/favicons-t/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./images/favicons-t/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="./images/favicons-t/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./images/favicons-t/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="./images/favicons-t/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="./images/favicons-t/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="./images/favicons-t/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicons-t/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="./images/favicons-t/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="./images/favicons-t/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="./images/favicons-t/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="./images/favicons-t/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="./images/favicons-t/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="./images/favicons-t/mstile-310x310.png" />
  </head>
  <body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TRZJPG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TRZJPG');</script>
    <!-- End Google Tag Manager -->
    <!-- Primary Page Layout - Hero
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="contactform">
      <a class="closelink" href="#"><span class="closeform">X</span></a>
      <div class="section form">
        <div class="container container-ovr">
          <form id="contactform" method="post" action="/" style="font-family: 'Helvetica Neue', Arial, sans-serif;">
            <div class="row">
              <div class="twelve columns">

                <label for="exampleRecipientInput">CONTACT US</label>
                <select name="contactPurpose" class="u-full-width" id="exampleRecipientInput">
                  <option value="General Inquiry">General Inquiry</option>
                  <option value="Jobs">Jobs</option>
                  <option value="Media">Media</option>
                  <option value="Partners/Distributors">Partners/Distributors</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="six columns">
                <input class="u-full-width" type="text" placeholder="Name" value="" name="contactName" class="name">
              </div>
              <div class="six columns">
                <input class="u-full-width" type="email" placeholder="Email" value="" name="contactEmail" class="email" id="email" required>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <textarea class="u-full-width" placeholder="Your Message" name="contactMessage" id="message"></textarea>
              </div>
            </div>
            <input class="button-primary" type="submit" name="contactSubmit" value="Submit">
          </form>
        </div>
      </div>
    </div>
    <div class="bodycover"></div>
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div>
                <iframe id="curvideo" width="100%" height="350px" src=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section hero">
      <div class="logo row"></div>
      <div class="container container-ovr">
        <div class="row">
          <div class="column seven header">
            <h4 class="title">One button for pain relief</h4>
            <br>
            <h6 class="subtitle">Professional TENS therapy in a patch</h6>
          </div>
        </div>
        <div class="row">
          <form action="//cur.us12.list-manage.com/subscribe/post-json?u=bad806e30593d1546c9ce360e&amp;id=2b2c3145a6&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="tryit validate" target="_blank" novalidate>
            <div class="three columns">
              <input class="u-full-width" type="email" placeholder="Enter email address" id="exampleEmailInput" value="" name="EMAIL" class="email" id="mce-EMAIL" required>
            </div>
            <div class="three columns">
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_bad806e30593d1546c9ce360e_2b2c3145a6" tabindex="-1" value="">
              </div>
              <input class="button-primary" type="submit" name="subscribe" id="mc-embedded-subscribe" value="Try it early">
            </div>
          </form>
        </div>
        <div class="row">
          <div class="five columns orbox-horizontal orbox-horizontal-small">OR</div>
        </div>
        <div class="row">
          <div class="one column">&nbsp;</div>
          <div class="three columns">
            <a class="vidlink" href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/zd2spHXanUc"><img src="./images/video.png" class="u-max-full-width"></img>
              <a class="vidlink text" href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/zd2spHXanUc">WATCH THE VIDEO</a>
            </div>
          </div>
        </div>
      </div>
      <div class="proof">
        <div class="container">
          <div class="row">
            <div class="three columns">
              <div class="proof-logo proof-logo-1"></div>
            </div>
            <div class="three columns">
              <div class="proof-logo proof-logo-2"></div>
            </div>
            <div class="three columns">
              <div class="proof-logo proof-logo-3"></div>
            </div>
            <div class="three columns">
              <div class="proof-logo proof-logo-4"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="info">
        <div class="container">
          <div class="row">
            <h4 class="infotitle">Well-being, well designed.</h4>
          </div>
          <div class="row">
            <div class="one-third column">
              <div class="icon icon-1"></div>
              <h5 class="infopoint">Self-Adjusting</h5>
              <hr class="spacer">
              <p>Just place it where it hurts.  The optimal waveform, amplitude, and modulation pattern settings are automatically calibrated by our smart biosensors.</p>
            </div>
            <div class="one-third column">
              <div class="icon icon-2"></div>
              <h5 class="infopoint">Patented HFIT Therapy</h5>
              <hr class="spacer">
              <p>High Frequency Impulse Therapy (HFIT) uses 30 MHz pulses to block pain signals directly, as opposed to traditional, low-frequency TENS devices.</p>
            </div>
            <div class="one-third column">
              <div class="icon icon-3"></div>
              <h5 class="infopoint">Simple, wearable design</h5>
              <hr class="spacer">
              <p>Our design is free of wires or bulky batteries, making it easy use throughout the day. It's durable, discreet, and can last six hours without a charge.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="footer-container">
          <span>2015 Thimble Bioelectronics</span>
          <span class="dot"></span>
          <a href="#" class="contactlink"><span>Contact Us</span></a>
        </div>
      </div>
      <!-- End Document
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="./js/bootstrap.js"></script>
      <script type="text/javascript" src="./js/app.js"></script>
      <script type="text/javascript" src="./js/signup.js"></script>
      <script type="text/javascript" src="./js/msg.js"></script>
    </body>
  </html>
