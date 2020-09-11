$(document).ready(function(){  
    
    $('#contactform').validate({

                    
                    errorPlacement: function(error,element){
                            error.insertBefore(element);
							error.css({
                               'font-size': '1vw',
                               'color': 'red',
                            });
							if($(window).width() <= 750){
                               error.css({
                                  'font-size': '3vw',
                                  'color': 'red',
                               });
                            }
                    },
                    
         
                     rules: {
                             username: {
                                 required: true

                             },
                             email: {
                                 required: true
                             },
                         
                             comments: {
                                 required: true
                             }
                     },
                    
                     messages: {   
                          username: {
                              required: "* Opps! Don't forget any :)."
                          },
                          email: {
                              required: "* It looks like my contact wont accept your Email. Please check format(Ex. yourname@domain.com)."
                          },
                          comments: {
                              required: "* Please enter a message."
                          }
                     }
              });
  
});