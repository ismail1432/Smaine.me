$(function () {
    $('#show1, #skills, #gallery, #contact, #chevronGal').hide();
    $(".navpre").hide();
    
    function clignoter() {
        $("#chevron, #chevronGal, #chevron1, #chevron2, #chevron3" ).animate({
        opacity: "toggle"}, 
    {
        duration: 800,
        complete: function () {
        clignoter();
      }
   });
}
 
clignoter();
         $('.words').hide().fadeIn(3000,'swing');
         $('.word').hide().fadeIn(4500,'swing');
         $('#btn1').click(function () {
                $('#btn1').fadeOut(1000).remove();
                $('.word').fadeOut(1000).remove();
                $('.words').fadeOut(1000).remove();
                $('#show1').fadeIn(3000,'swing');
            });
        $('.navskills').click(function () {
            skills();
            });
        $('#chevron2').click(function () {
            skills2();
            });
        $('.brand').click(function () {
            presentation();
          });
        $('.navpre').click(function () {
            presentation();
            });  
        $('.navcon').click(function () {
           contact();
            });     
        $('#skil').click(function () {
            skills();
            });
         $('#arrowSkillUp').click(function (){
           presentation(); 
            });
        $('.navgal').click(function (){
            gallery();
            });
        $('#gal').click(function (){
           gallery(); 
            });
        $('#arrowcontact').click(function(){
           gallery();
        $("#contact").hide();       
            });  
        $('#chevronGal').click(function(){
          contact();
            });
           $('.imgparis').mouseover(function() {
      $(this).text('click here');
    });
 
        $('.imgparis').click(function(){
         window.open('http://www.parisparcoeur.fr');
            });
        $('.imgthegoodloc').click(function(){
         window.open('http://www.thegoodloc.fr');
            });
        $('.imgautoption').click(function(){
         window.open('https://github.com/ismail1432/autoption/blob/master/DEMO_IMAGE/demo_autoption.png');
            });
        
        $('#send, #mail, #message').prop('disabled', true);
           $('#name').keyup(function(){
             if(!$('#name').val().match(/^[a-z\s-]+$/i))
              {
                $(".error-msgname").show().html('<span class="label label-danger">Veuillez entrer un nom valide</span>');
                $('#mail').prop('disabled', true);
               }
              else if($('#name').val() == "")
              {
                $(".error-msgname").fadeIn().html('<span class="label label-danger">Veuillez entrer un nom</span>');
                $('#mail').prop('disabled', true);
               }
              else {
                $(".error-msgname").hide();
                $('#mail').prop('disabled', false);
              }
              if((!$('#name').val().match(/^[a-z]+$/i)) && ($('#name').val() == "")){
                $('#mail').prop('disabled', false);
              }
                });
          
           $('#mail').keyup(function(){
             if(!$('#mail').val().match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))
              {
                $(".error-msgmail").show().html('<span class="label label-danger">Veuillez entrer une adresse mail valide</span>');
                $('#message').prop('disabled', true);
               }
                   else if($('#mail').val() == "")
              {
                $(".error-msgmail").fadeIn().html('<span class="label label-danger">Veuillez saisir une adresse mail</span>');
                $('#message').prop('disabled', true);
               }
               
              else {
                $(".error-msgmail").hide();
                $('#message').prop('disabled', false);
                $('#send').prop('disabled', false);
              }
                });
         
          $('#send').click(function(){
              valid = true;
             if($('#message').val() == "")
              {
                 $(".error-msg").fadeIn().html('<span class="label label-danger">Veuillez saisir un message</span>');
                    valid = false;
               } 
               
              else {
                   $(".error-msg").hide();
                    valid = true;
              }
             
              
              if(valid == true){
            var name = $('#name').val();
               var mail = $('#mail').val();
              var message = $('#message').val();
              $.post('mycv.php', {'name' :name, 'mail' :mail, 'message' :message});
             $(".msg-send").fadeIn().html('<div class="label label-success" role="alert">Votre message à bien été envoyé !</div>');
                // $("#ajaxtest").load('ac.htm');    
              }
           
          });  
});
        
    
     
     function contact(){
        $("#gallery").hide();  
        $("#contact").fadeIn(1000,'swing');
        $('body').css('background-image', 'url(\"pictures/contact.jpg\")');
        $(".navcon, #presentation, #skills").hide();
        $(".navpre, .navskills, .navgal").show();
         
     }
     
     function gallery(){
        $("#gallery").fadeIn(1000,'swing');
        $(".navpre, .navskills, .navcon").show(); 
        $(".navgal, #contact, #presentation").hide();
        $("#chevronGal").fadeIn(1000,'swing');
        $('body').css('background-image', 'url(\"pictures/certif.jpg\")');
        $('#skills').fadeOut(1000).hide();
        $('#chevron').fadeOut(1000).hide();  
    }
     
     function skills(){
        $("#skills").fadeIn(1000,'swing');
        $(".navpre, .navgal, .navcon").show();
        $(".navskills, #contact, #presentation, #gallery").hide();
        $('body').css('background-image', 'url(\"pictures/silver.jpg\")');
        $('#presentation').fadeOut(1000).hide();
        $(".navskills").css('display', 'none');
        $('#skills h3 i').hide();
        for (a = 0; a < 75; a+=6){
          $('#skills h3 i').eq(a).fadeIn(1000);
          $('#skills h3 i').eq(a + 1).fadeIn(2000);
          $('#skills h3 i').eq(a + 2).fadeIn(3000);
          $('#skills h3 i').eq(a + 3).fadeIn(4000);
          $('#skills h3 i').eq(a + 4).fadeIn(5000);
          $('#skills h3 i').eq(a + 5).fadeIn(5000);
          $('#skills h3 i').eq(a + 6).fadeIn(5000);         
        }
    }
    function skills2(){
        $("#skills").fadeIn(1000,'swing');
        $(".navpre, .navgal, .navcon").show();
        $(".navskills, #contact, #presentation, #gallery").hide();
        $('body').css('background-image', 'url(\"pictures/silver.jpg\")');
        $('#presentation').fadeOut(1000).hide();
        $(".navskills").css('display', 'none');
        $('#skills h3 i').hide();
        for (a = 0; a < 60; a+=6){
          $('#skills h3 i').eq(a).fadeIn(1000);
          $('#skills h3 i').eq(a + 1).fadeIn(2000);
          $('#skills h3 i').eq(a + 2).fadeIn(3000);
          $('#skills h3 i').eq(a + 3).fadeIn(4000);
         $('#skills h3 i').eq(a + 4).fadeIn(5000);
          $('#skills h3 i').eq(a + 5).fadeIn(5000);
          $('#skills h3 i').eq(a + 6).fadeIn(5000);         
        }
    }
     
     function presentation(){
        $("#presentation").fadeIn(1000,'swing');
        $('body').css('background-image', 'url(\"pictures/presentation.jpg\")');
        $('#show1, #skills, #gallery, #contact, #chevronGal').hide();
        $(".navpre").hide();
        $(".navgal, .navskills, .navcon").show(); 
     }

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78049638-3', 'auto');
  ga('send', 'pageview');


        
     
 