autoPlayYouTubeModal();

//FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-toggle="modal"]');

    trigger.click(function () {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-theVideo"),
            videoSRCauto = videoSRC + "?autoplay=1",
            calcwidth = $(window).innerWidth() * .9 + 'px',
            calcheight = $(window).innerHeight() * .9 + 'px';
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' iframe').attr('height', calcheight);
        $(theModal + ' iframe').attr('width', calcwidth);
        $(theModal + ' button.close').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
        $('.modal').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
    });
    $(window).resize(function(){
      var theModal = '#videoModal',
          calcwidth = $(window).innerWidth() * .9 + 'px',
          calcheight = $(window).innerHeight() * .9 + 'px';
      $(theModal + ' iframe').attr('height', calcheight);
      $(theModal + ' iframe').attr('width', calcwidth);
    });
}
$('.contactlink').on('click', function(){
  $('.bodycover').css('display','block');
  $('.contactform').css('display','block');
});
$('.bodycover, .closeform').on('click', function(){
  $('.bodycover, .contactform').css('display','none');
});