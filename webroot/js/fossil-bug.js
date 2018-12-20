$(function(){
    //initialize content

    $('.network-name').hover(function(){
        var buttonId = $(this).find('span').attr('id').slice(7);
        $('#main-content div.content').hide();
        $('#main-content div.content.'+buttonId).show();
        if (buttonId == 'welcome'){
            $(".home").css('background-image', 'url(img/28218790_ml.jpg)');
        } else if (buttonId == 'work'){
            $(".home").css('background-image', 'url(img/28218790_ml.jpg)');
        } else if(buttonId == 'life'){
            $(".home").css('background-image', 'url(img/wedding.jpg)');
        } else if(buttonId == 'play'){
            $(".home").css('background-image', 'url(img/bike01.jpg)');
        } else {
            $(".home").css('background-image', 'url(img/29504125_ml.jpg)');
            //Copyright: <a href='https://www.123rf.com/profile_nexusplexus'>nexusplexus / 123RF Stock Photo</a>
        }
        $("div.main-content div").hide();
        $("div.main-content div."+buttonId).show();
    });
});