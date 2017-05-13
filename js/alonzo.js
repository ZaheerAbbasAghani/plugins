/* OWL CAROUSEL */
jQuery(document).ready(function() {
jQuery('.owl-carousel').owlCarousel({
loop: true,
margin: 10,
responsiveClass: true,
responsive: {
0: {
items: 1,
nav: false,
//stagePadding: 60
},

600: {
items: 2,
nav: false
},

1000: {
items: 3,
nav: true,
navText: ["<img src='http://localhost/demos/wp-content/uploads/2017/05/left_customer_review.png'>","<img src='http://localhost/demos/wp-content/uploads/2017/05/right_customer_review.pngages/right_customer_review.png'>"],
loop: false,
margin: 20
}
}
})
});


/* HOVER BUTTON EFFECTS */

jQuery('.buynow').hover(
    function(){
      jQuery(this).attr('src','images/buynow_hr.png')
    },
    function(){
      jQuery(this).attr('src','images/buynow.png')
    }
)