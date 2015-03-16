var main = function() 
{    
    // toggles article descriptions on mouse clicks
    $('.article').click(function() 
        {
            $('.article').removeClass('current');
            $('.description').hide();
            $(this).addClass('current');
            $(this).children('.description').show();
        }
    );

    // allows keyboard control of article navigation and description toggling
    $(document).on("keydown", function(event)
        {
            // toggles article description on key press
            // keys: 79 = o  13 = return
            if(event.which == 79 || event.which == 13) 
                {
                    $('.current').children('.description').toggle();
                }

            // moves to next article on key press
            // keys: 78 = n  40 = down arrow
            else if(event.which == 78 || event.which == 40) 
                {
                    var currentArticle = $('.current');
                    var nextArticle = currentArticle.next();

                    // returns to first article when "n" is pressed on last article
                    if (nextArticle.length === 0)
                        {
                            nextArticle = $('.articles').find('.article').first();
                        }

                    currentArticle.removeClass('current');
                    nextArticle.addClass('current');
                }

            // moves to previous article on key press
            // keys: 80 = p  38 = up arrow
            else if (event.which == 80 || event.which == 38)
                {
                    var currentArticle = $('.current');
                    var previousArticle = currentArticle.prev();

                    // returns to last article when "p" is pressed on first article
                    if (previousArticle.length === 0)
                        {
                            previousArticle = $('.articles').find('.article').last();
                        }

                    currentArticle.removeClass('current');
                    previousArticle.addClass('current');
                }
        }
    );

};

$(document).ready(main);