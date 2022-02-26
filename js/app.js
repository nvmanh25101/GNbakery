
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