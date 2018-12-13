$(function(){
    $('.network-name').hover(function(){
        var buttonId = $(this).find('span').attr('id').slice(0,4);
        if (buttonId == 'prog'){
            $(".home").css('background-image', 'url(img/28218790_ml.jpg)');
        } else if(buttonId == 'serv'){
            $(".home").css('background-image', 'url(img/14238282_ml.jpg)');
        } else if(buttonId == 'othe'){
            $(".home").css('background-image', 'url(img/30610324_ml.jpg)');
        } else if(buttonId == 'abou'){
            $(".home").css('background-image', 'url(img/29504125_ml.jpg)');
            //Copyright: <a href='https://www.123rf.com/profile_nexusplexus'>nexusplexus / 123RF Stock Photo</a>
        }
        $("div.main-content div").hide();
        $("div.main-content div."+buttonId).show();
    });
});