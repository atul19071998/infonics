<!--================Footer Area =================-->
 <footer>
    <div class="bottom_footer">
 
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="clearfix">
                        <a href="#" class="footer-logo d-block mb-2 mr-2 float-left"><img src="assets/images/banner/infonics.jpg" alt=""></a>
                        <br>
                        <p>We are a leading manufacturer of LED display products such as indoor and outdoor LED video walls, fine-pitch displays, ticker displays, parameter displays, standees, and posters. We also offer customized LED advertising board solutions to meet the unique needs of our customers.</p>
                        <ul class="social">
                        <li><a href="" id="fb" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" id="in" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="" id="li" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="" id="tw" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>

<!-- 
                      <img src="assets/images/makein.png" alt=""> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>Quick Links</h6>
                    <div class="point-line"></div>
                    <ul class="footer-links">
                        <li><a href="<?php path();?>/">Home</a></li>
                        <li><a href="<?php path();?>/about-us">About Us</a></li>
                        <li><a href="<?php path();?>/blog">Gallery</a></li>
                        <li><a href="<?php path();?>/contact-us">Certifications</a></li>
                        <li><a href="<?php path();?>/contact-us">Clients</a></li>
                        <li><a href="<?php path();?>/contact-us">Blogs</a></li>
                        <li><a href="<?php path();?>/contact-us">Contact Us</a></li>
                        <li><a href="<?php path();?>/contact-us">E-Waste Management</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>Our Solutions</h6>
                    <div class="point-line"></div>
                    <ul class="footer-links">
                        
                        <li><a href="#">LED Video Wall</a></li>
                        <li><a href="#">LED Ticker Display</a></li>
                        <li><a href="#">LED Parameters Display</a></li>
                        <li><a href="#">LED Standees & Posters</a></li>
                        <li><a href="#">Customized LED Displays</a></li>
                        


                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>Locate Us</h6>
                    <div class="point-line"></div>
                    <ul class="footer-links">
                        <li><a href="tel:+919555595000"> <i class="fa-solid fa-square-phone fax"></i><b>Toll Free No:</b> 18008912650</a></li>
                        <li><a href="tel: +917827377073"><i class="fa fa-phone mr-1 fax"></i><b>Phone No:</b> +91-7827377073</a></li>
                        <li><a href="mailto:vaibhav@electrinno.com"><i class="fa fa-envelope mr-1 fax"></i><b>Email:</b> info@infonicstech.com</a></li>
                        <li><a href="#"> <i class="fa-solid fa-location-dot fax"></i> <b>Address:</b>  C-36, Sector- 88, Noida- 201305</a></li>

                   <img src="assets/images/banner/gem.png" alt="" class="footer-img">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright">
        <div class="container">
            <div class="row p-2 align-items-center">
                <div class="col-md-6 col-lg-8">
                    <p class="mb-2 mb-md-0">©2023 Infonics Technologies. All Rights Reserved.</a></p>
                </div>
 
            </div>
        
    </div>
</footer>


<!--================End Footer Area =================-->
 

<script src="<?php path();?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php path();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php path();?>/assets/js/wow.min.js"></script>
<script src="<?php path();?>/assets/js/simpleLightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
<!-- Extra plugin js -->


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
        // Gallery image hover
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) { 
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});
       </script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="assets/css/youtube-popup.css">
<link rel="stylesheet" href="assets/css/grt-youtube-popup.css"> -->
<script src="assets/js/grt-youtube-popup.js"></script>

