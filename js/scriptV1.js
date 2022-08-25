$(document).ready(function(){

    // NAVBAR  
    $('.bars').on('click', function() {
        $(this).toggleClass('open');
        $('.pages').toggleClass('show');
        $('.begin').toggleClass('hide');
        $('body').toggleClass('scroll');
        $('header').toggleClass('height');
        $('.background').toggleClass('height');
    }); 


    // NAVBAR CLICK  
    $('.pages a').on('click', function() {
        $('.bars').removeClass('open');
        $('.pages').removeClass('show');
        $('.begin').removeClass('hide');
        $('body').removeClass('scroll');
    });  


    // FOOTER ICONS ANIMATION
    $('.icons a').on('mouseover', function() {
        $(this).find('i').addClass('animation');
    });

    $('.icons a').on('mouseout', function() {
        $(this).find('i').removeClass('animation');
    });


    // HOME ICON DOWN
    $('.down').on('click', function () {

        data = $(this).attr('data');

        $('html, body').animate({
            scrollTop: $('#'+data).offset().top
        }, 'slow');
      
    });

    
    // PROJECTS
    $('.galery').on('mouseover', function() {
        $(this).find('.description').css({'background-color' : 'rgba(14, 14, 14, 0.9)', 'opacity' : '1'});             
    });

    $('.galery').on('mouseout', function() {
        $(this).find('.description').css({'background-color' : 'transparent', 'opacity' : '0'});           
    }); 


    // CURRÍCULO NAV
    $('.item').on('click', function() {
        var dataType = $(this).data('type');
        
        $('.topic').hide();
        $('.'+dataType).show();  

        $(this).closest('.nav').find('.item').find('h3').removeClass('active');
        $(this).find('h3').addClass('active');

        $(this).closest('.nav').find('.item').find('.line').removeClass('visible');
        $(this).find('.line').addClass('visible');     
    }); 


    $('.one').on('click', function() {
        $('html, body').animate({
            scrollTop: $('.first').offset().top - ($('.main').outerHeight())
        }, 'slow');
    });  

    $('.two').on('click', function() {
        $('html, body').animate({
            scrollTop: $('.second').offset().top - ($('.main').outerHeight())
        }, 'slow');
    });  

    $('.three').on('click', function() {
        $('html, body').animate({
            scrollTop: $('.third').offset().top - ($('.main').outerHeight())
        }, 'slow');
    }); 


    // CURRÍCULO 
    $('.question').on('click', function(e) {
        e.preventDefault();
        
        var answer = $(this).next('.answer');
        var less = $(this).find('.less');
        var more = $(this).find('.more');
        
        $('.answer').not(answer).hide();
        $('.less').not(less).hide();
        $('.more').not(more).show();
            
        if (answer.is(":visible")) {
            answer.hide()
        }  
        
        else {
            answer.show();
        }

        if (less.is(":visible")) {
            less.hide()
        }  
        
        else {
            less.show();
        }

        if (more.is(":visible")) {
            more.hide()
        }  
        
        else {
            more.show();
        }
    });   


    // POPUP FORM
    $('.form-close').on('click', function() {
        $('.popup-form').css('display', 'none');        
    });       
    
});   