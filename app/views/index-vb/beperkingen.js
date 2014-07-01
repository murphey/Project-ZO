// $(document).ready(function (){
//     $(".afbeelding").click(function (){
//         $("#titel").fadeOut(500);
//     });
// });
$(document).ready(function (){
   $( ".afbeelding" ).click(function() {
       var par = $(this).closest( ".effect" );
       var speed = 400;
       par.find('.afbeelding').toggleClass('afbeelding-over');

       par.find( ".titel" ).stop().animate({
           height: "toggle"
       }, speed);
       
       par.find( ".description" ).stop().animate({
           height: "toggle"
       }, speed);
   });
});