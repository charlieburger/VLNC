var scroll_pending = false;
var title_timeout_id = null;

$(document).ready(function () {
    console.log("Dom ready");
    active = true;
    lastItem = 0;
    $('#title').hide();

    // Fine control of the scroll!
    $('body').mousewheel(function(event, delta) {
      //event.preventDefault();
      if (delta < 0) { // down
        //goToNextSection();
      } else {
        //goToPrevSection();
      }
    });
});

$(document).keydown(function (e) {
    var keyCode = e.keyCode || e.which,
        arrow = {left: 37, up: 38, right: 39, down: 40 };

    switch (keyCode) {
        case arrow.left:
            //..

            //prev current diaporama if diaporama
            break;
        case arrow.up:
            goToPrevSection();
            e.preventDefault();
            break;
        case arrow.right:
            //..
            //console.log("right ");
            //next current diaporama if diaporama
            break;
        case arrow.down:
            //..
            goToNextSection();
            e.preventDefault();
            break;
    }
});
/*
 $(window).scroll(function () {

 //console.log("scrollTop"+$(window).scrollTop());
 //console.log("hauteur section"+$('.section').height());


 if(active)
 {
 var h = $('.section').height();
 var sT = $(window).scrollTop();
 var ratio = sT/h;

 var percentage = ratio - Math.floor(ratio);
 currentItem = Math.ceil(ratio);
 if(lastItem ==0 && currentItem >1)
 {
 lastItem=currentItem;
 }

 console.log("currentItem =>"+currentItem);
 console.log("ratio =>"+ratio);
 console.log("percentage =>"+percentage);
 console.log("last =>"+lastItem);



 if(currentItem > lastItem && percentage<0.60 && percentage>0.02 && active)
 {

 console.log("go down");
 active=false;

 var sens=1;


 $('html, body').stop().animate(
 {
 scrollTop: ((currentItem)*(h))
 },
 {
 complete: function(){active=true; lastItem=currentItem; console.log("new currentItem"+lastItem);console.log("------------------------")}
 },
 1500,
 'easeInOutExpo'
 );

 //stop event
 //re event after animate

 if you don't want to use the easing effects:
 $('html, body').stop().animate({
 scrollTop: $($anchor.attr('href')).offset().top
 }, 1000);

 }

 else if( ratio < lastItem &&  active )
 {
 console.log("goBacward");


 var sens=1;
 active=false;
 currentItem--;

 $('html, body').stop().animate(
 {
 scrollTop: ((currentItem)*(h))
 },
 {
 complete: function(){active=true;lastItem=currentItem;console.log("new currentItem up"+currentItem);console.log("------------------------")}
 },
 1500,
 'easeInOutExpo'
 );
 }

 }


 });
 */


$(function () {
    $('nav a').bind('click', function (event) {
        goToSection($(this).attr('href'));
        event.preventDefault();
    });
});

function goToSection(section_id) {
    if (scroll_pending) return;

    var $title = section_id.replace('#', '');

    if ($title !== "homepage" && $title !== "nogo") {
        $('#title p').text($title);
        $('#title').fadeIn(200);

        if (title_timeout_id) {
            window.clearTimeout(title_timeout_id);
        }
    }

    scroll_pending = true;

    $('body').stop().animate(
        { scrollTop: $(section_id).offset().top },
        1000,
        'easeInOutExpo',
        function () {
            active = true;
            scroll_pending = false;

            title_timeout_id = window.setTimeout(function() {
                $('#title').fadeOut('slow');
            });
        }
    );
}

function goToNextSection()
{
    if (!section_offsets) return;
    if (scroll_pending) return;

    var actual_position = $(document).scrollTop();
    for (offset in section_offsets) {
      if (parseInt(offset, 10) > parseInt(actual_position, 10)) {
          goToSection(section_offsets[offset]);
          return true;
      }
    }
}

function goToPrevSection()
{
    if (!section_offsets) return;
    if (scroll_pending) return;

    var actual_position = $(document).scrollTop();
    var section_to_go   = null;

    for (offset in section_offsets) {
      if (parseInt(offset, 10) < parseInt(actual_position, 10)) {
          section_to_go = section_offsets[offset];
      }
    }

    if (section_to_go) {
      goToSection(section_to_go);
    }
}
