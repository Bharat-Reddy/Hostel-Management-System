/*
 * Smoothbox
 * http://kthornbloom.com/smoothbox.php
 *
 * Copyright 2013, Kevin Thornbloom
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */

$(document).ready(function() {

    $('.sb').click(function(event){
        // which was clicked?
        var clicked = $(this).index('.sb');
            
        // create smoothbox
       $('body').append('<div class="smoothbox sb-load"><div class="smoothbox-table"><div class="smoothbox-centering"><div class="smoothbox-sizing"><div class="sb-nav"><a href="#" class="sb-prev sb-prev-on" alt="Previous">←</a><a href="#" class="sb-cancel" alt="Close">×</a><a href="#" class="sb-next sb-next-on" alt="Next">→</a></div><ul class="sb-items"></ul></div></div></div></div>');
          
        $.fn.reverse = [].reverse;
        // get each picture, put them in the box
        $('.sb').reverse().each(function() {
           var href = $(this).attr('href');
            if ($(this).attr('title')) {
                var caption = $(this).attr('title');
                $('.sb-items').append('<div class="sb-item"><div class="sb-caption">'+ caption +'</div><img src="'+ href + '"/></div>');
            }   
            else {
                  $('.sb-items').append('<div class="sb-item"><img src="'+ href + '"/></div>');
                
           }
        });
        
        $('.sb-item').slice(0,-(clicked)).appendTo('.sb-items');
        $('.sb-item').not(':last').hide();
        $('.sb-item img:last').load(function() { 
            $('.smoothbox-sizing').fadeIn('slow', function() {
                $('.sb-nav').fadeIn();
                $('.sb-load').removeClass('sb-load');
            });
        });
        event.preventDefault();
    });
    
    $(document).on('click', ".sb-cancel", function(event){
        $('.smoothbox').fadeOut('slow', function() {
            $('.smoothbox').remove();
        });
        event.preventDefault();
    });

    $(document).on('click', ".sb-next-on", function(event){
        $(this).removeClass('sb-next-on');
        
            $('.sb-item:last').addClass('sb-item-ani');
        // after animation, move order & remove class
        
            $(".sb-item:last").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
                $('.sb-item').eq(-2).addClass('no-trans').fadeIn('fast');
                $(this).removeClass('sb-item-ani').prependTo('.sb-items').hide();
                $('.sb-item:last').removeClass('no-trans');
                $('.sb-next').addClass('sb-next-on');
                $('.sb-item').unbind();
            }); 
        
        event.preventDefault();
    });

    $(document).on('click', ".sb-prev-on", function(event){  
        $(this).removeClass('sb-prev-on');
            $('.sb-item:last').hide(); 
            $(".sb-item:first").addClass('sb-item-ani2 no-trans').appendTo('.sb-items');
            $('.sb-item:last').show().removeClass('no-trans').delay(1).queue(function(next){
                $('.sb-item:last').removeClass('sb-item-ani2');
                next();
            });
            $(this).addClass('sb-prev-on');           
        event.preventDefault();
    });
});
