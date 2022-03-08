
$(document).ready(function(){
         $('.sub-menu').parent('li').addClass('has-child');
    });

var counter = 1;
    setInterval(function(){
       document.getElementById('radio' + counter).checked = true;
       counter++;
       if (counter > 4) {
        counter = 1;
       } 
    }, 3000);

$(document).ready(function(){
    $('.row').slick({
     
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        arrow:true,
        autoplaySpeed: 2000,
        autoplay: true,
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"

      });
  });


  $(document).ready(function(){
    $('.productss').slick({
     
        slidesToShow: 4,
        slidesToScroll: 2,
        infinite: true,
        arrow:true,
        autoplaySpeed: 2000,
        autoplay: true,
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"       
      });
  });

  $(document).ready(function(){
      $(window).scroll(function(){
        if($(this).scrollTop()){
            $('#backtop').faceIn();

        }else{
            $('#backtop').faceOut();
        }
      });
      $('#backtop').click(function(){
          $('html, body').animate({scrollTop: 0}, 400);
      });
  });

  
/*slider*/

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Chuyển ảnh sau 2 giây
}

/*header*/

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

/*dropdown*/
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
  

