/*
 * getTrueHeight - Finds true height of an object while accounting for margins,
 * borders, and padding
 */
function getTrueHeight(obj) {
  var trueHeight = 0;
  if (obj.css("border-style") != "") {    // Border exists
    trueHeight = obj.innerHeight();
  } else {                                // No border exists
    var bw = obj.css("border-width");     // Save previous data just in case
    var bc = obj.css("border-color");
    obj.css("border-width", "1px");       // As small as possible
    obj.css("border-color", "#00000000"); // Therefore clear
    obj.css("border-style", "solid");     // Border now activates
    trueHeight = obj.innerHeight(); // Height + padding, no border or margin
    obj.css("border-style", "");          // Deactivate border
    obj.css("border-color", bc);          // Restore presets
    obj.css("border-width", bw);
  }
  return trueHeight;
}

$(document).ready(function() {
	/* ===== Fix Carousel ===================================================== */
	var carouselItems = $(".carousel-item");

	// Get carousel to work by adding 'active' to 1st blog post
	carouselItems.first().addClass("active");

	// Make the div that houses the carousel a constant height as to not have it
	// bob up and down when post length changes (despite that's what a fun
	// carousel does...)
	var maxCarouselHeight = 0;
	carouselItems.each(function(index, elem) { // Find max height of blog posts
		var thisHeight = getTrueHeight($(this));
		maxCarouselHeight = (thisHeight > maxCarouselHeight)
											? thisHeight : maxCarouselHeight;
	});
	$(".blog-article").css("min-height", maxCarouselHeight);	// Temp. adj. height
	maxCarouselHeight = getTrueHeight($(".blog-article"));		// Add button height
	$(".blog-article").height(maxCarouselHeight);							// Final height

  /* ===== Carousel Button Interactivity ==================================== */
  // Enlarges previous/next icons when moused over, back to normal when off
  /*
   * TODO: doesn't work well when you mouse over icon itself, stacks mouseover/
   * mouseoff functions onto a large list and keeps resizing repeatedly
  CAROUSEL_ICON_SIZE_ORIG = 20; // Width and height of carousel icon in pixels
  CAROUSEL_ICON_SIZE_NEW  = 40;
  $(".blog-carousel-prev").mouseover(function() {
    $(this).find(".carousel-control-prev-icon").animate({
      width: CAROUSEL_ICON_SIZE_NEW,
      height: CAROUSEL_ICON_SIZE_NEW
    }, 200);
  }).mouseout(function() {
    $(this).find(".carousel-control-prev-icon").animate({
      width: CAROUSEL_ICON_SIZE_ORIG,
      height: CAROUSEL_ICON_SIZE_ORIG
    }, 200);
  });
  $(".blog-carousel-next").mouseover(function() {
    $(this).find(".carousel-control-next-icon").animate({
      width: CAROUSEL_ICON_SIZE_NEW,
      height: CAROUSEL_ICON_SIZE_NEW
    }, 200);
  }).mouseout(function() {
    $(this).find(".carousel-control-next-icon").animate({
      width: CAROUSEL_ICON_SIZE_ORIG,
      height: CAROUSEL_ICON_SIZE_ORIG
    }, 200);
  });
  */

	/* ===== Fade Effects ===================================================== */
	// Fade in welcome message as user loads page
	$(".blog-welcome").fadeTo(1000, 1).removeClass("hidden");

	// Fade in other elements as use scrolls
	$(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".hidden").each(function() {
      // Check the location of each desired element
      var objectTop = $(this).offset().top;
      var OFFSET = 150; // Number of pixels of offset before fade effects engage
      
      // If the element peaks through scrolling window
      if (objectTop + OFFSET < windowBottom) { // Object in view (scroll down)
        $(this).fadeTo(500, 1).removeClass("hidden");
      }
    });
  }).scroll(); //invoke scroll-handler on page-load

  /* ===== Smooth Scrolling ================================================= */
  // When user clicks to see another features post, scroll smoothly to top of
  // article
  $(".blog-carousel-button a").click(function(event) {
  	var target = $(".blog-main");
  	$("html, body").animate({
  		scrollTop: target.offset().top
  	}, 400, function() {
      target.focus();
      if (!target.is(":focus")) { // Checking if the target was focused
        target.attr('tabindex','-1'); // Adding tabindex for those not focusable
        target.focus(); // Set focus again
      };
  	});
  });
})