
$(window).on('load', function() {
  //for use in production please remove this setTimeOut
  setTimeout(function(){ 
      $('.preloader').addClass('preloader-deactivate');
  }, 400);
  //uncomment this line for use this snippet in production
  //	$('.preloader').addClass('preloader-deactivate');
  $(".input-search").val("");
});

let index = 0;

const totalWorkItems = $(".work-item").length;

$(document).ready(function() {
  $('.nav-toggle').click(function(){
    $(" .nav").slideToggle();
  })
  $('.header .nav a').click(function(){
    if($(window).width()< 768){
      $(" .nav").slideToggle();
    }
  })

  /* Fixed header */

/*   $(window).scroll(function(){
    if($(this).scrollTop() > 100){
      $(".header").addClass(".fixed");
    }
    else{
      $(".header").removeClass("fixed")
    }
  }) */

  $("a").on('click', function(){
    if(this.hash !== ""){
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop : $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      })
    }
  })

  const wheight = $(window).height();
  $(".lightbox-img").css("max-height", wheight + "px");

  $(".work-item-inner").click(function(){
    index = $(this).parent(".work-item").index();
    $(".lightbox").addClass("open");
    lightboxSlideShow();
  })

  $(".lightbox .prev").click(function(){
    if(index == 0){
      index = totalWorkItems - 1;
    }
    else {
      index--;
    }
    lightboxSlideShow();
  })

  $(".lightbox .next").click(function(){
    if(index == totalWorkItems - 1){
      index = 0;
    }
    else {
      index++;
    }
    lightboxSlideShow();
  })

  $(".lightbox-close").click(function(){
     $(".lightbox").removeClass("open")
  })

  $(".lightbox").click(function(event){
    if($(event.target).hasClass("lightbox")){
      $(this).removeClass("open")
    }
  })

  /* Lightbox SlideShow */
  function lightboxSlideShow () {
    const imgScr = $(".work-item").eq(index).find("img").attr("data-large");
    
    const category = $(".work-item").eq(index).find("h4").html();

    $(".lightbox-img").attr("scr", imgScr);

    $(".lightbox-category").html(category);
    
    $(".lightbox-counter").html(totalWorkItems+"/"+ (index+1));
  }

  /* Dialog box */

  $("#button").click(function(){
    $("#dialog").dialog("open");
    $(".input-control").val("");
  })
  $("#dialog").dialog({
    title: "Thank you for contacting",
    closeOnEscape: false,
    modal: true,
    autoOpen: false,
    open: function(e) {
      $(e.target).parent().css('background-color','black');
    }
  });
  
/* Search Engine */
  
$(".input-search-js").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $(".overlay").filter(function() {
 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); 
  });
  if ($(".input-search").val() !== "") {
    $(".about-section").hide(500);
    $(".contact-section").hide(500);
  }
  else{
    $(".about-section").show(500);
    $(".contact-section").show(500);
  }
});

$(".input-search").on("keyup", function() {
  if ($(".input-search").val() !== "") {
    $(".about-section").hide(500);
    $("#need-signup").html("You need to log in first!");
  }
  else{
    $(".about-section").show(500);
    $("#need-signup").html("");
  }
});

});











