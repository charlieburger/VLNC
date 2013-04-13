var scroll_pending = false;
var title_timeout_id = null;

$(document).ready(function () {
    $('#title').hide();

    // Preload all the section gifs
    $('.section[data-img]').each(function() {
        var i = new Image();
        i.src = $(this).data('img');
    });

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

$(function () {
    $('nav a').bind('click', function (event) {
        goToSection($(this).attr('href'));
        event.preventDefault();
    });
});

function goToSection(section_id) {
    if (scroll_pending) return;

    var $title = section_id.replace('#', '');
    var section = $(section_id);

    if ($title !== "homepage" && $title !== "nogo") {
        if (section.data('img')) {
            $('#title p').html('<img src="'+section.data('img')+'" alt="" />')
            $('#title').show();
        } else {
            $('#title p').text($title);
            $('#title').fadeIn(200);
        }

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
            var duration = section.data('duration') ? parseInt(section.data('duration'), 10) - 1000 : 1000;

            title_timeout_id = window.setTimeout(function() {
                $('#title').fadeOut('slow');
            }, duration);
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
