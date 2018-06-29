$.extend({
    asMaxHeight: 700, //Size of the showing container
    asMinString: 3, //Number of characters to enter before start sending AJAX queries for search
    asSearchDelay: 350, //Time after the user has pressed last key of the search string to start calling the query
    asFadeIn: 'slow',
    asFadeOut: 'fast'
});

$.extend(jQuery.easing, {
    scrollSmoothEffect: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
    }
});

$(document).ready(function () {

    $('.ty-search-block__input').on('input propertychange', function () {
        searchNow($(this));

    });

    $('.ty-search-block__input').on('click', function (event) {

        event.stopPropagation();
        searchNow($(this));
        ;
    });

    $('.ty-search-block__input').attr('autocomplete', 'off');

    $('.ty-search-block__input').after('<div id="autosuggest"></div>');

    $('.ty-search-block__input').keyup(function (event) {

        control_buttons = {13: 'enter', 27: 'esc', 38: 'up', 40: 'down'};
        var char_code = (event.which) ? event.which : event.keyCode;
        if (typeof (control_buttons[char_code]) !== 'undefined') {              //[fixme] Does not goes beyond the visible part [alebargut]
            if (char_code === 13) {
                row = $('ul.autosuggest li.autosuggest-selected a');
                if (row.length > 0) {
                    var str = row.text();
                    $(this).attr("value", $.trim(str));
                    jQuery.redirect(row.attr("href"));
                }
            } else if (char_code === 27) {
                destroyResultsBox();
                $(this).val('');
            } else if (char_code === 38 || char_code === 40) {

                row = $('ul.autosuggest li.autosuggest-selected');

                if (row.length > 0) {
                    if (char_code === 38) {
                        new_row = row.prev();
                        if (!(new_row.length > 0))
                            new_row = $('ul.autosuggest li:last');
                    } else {
                        new_row = row.next();
                        if (!(new_row.length > 0))
                            new_row = $('ul.autosuggest li:first');
                    }
                } else {
                    if (char_code === 38) {
                        direction = ':last';
                    } else {
                        direction = ':first';
                    }
                    new_row = $('ul.autosuggest li' + direction);
                }
                $('ul.autosuggest li.autosuggest-selected').removeClass('autosuggest-selected');
                new_row.addClass('autosuggest-selected');
            }
        }

    });

    function areEnoughChars() {
        if ($('.ty-search-block__input').val().length >= $.asMinString) {
            return true;
        } else {
            return false;
        }
    }
    ;

    function searchNow(elm) {

        day = new Date;
        last_time = day.getTime();

        setTimeout(function () {
            day = new Date;
            now = day.getTime();
            differ = now - last_time;
            if (differ >= $.asSearchDelay) {
                if ((areEnoughChars() === true) && (elm.val() !== 'Search products')) {
                    var data = {}
                    var searchName = $(elm).attr("name");
                    var dispatchController = 'show_suggest';
                    data[searchName] = $(elm).val();
                    data[dispatchController] = 'show';
                    $.ceAjax('request', fn_url('products.search_autosuggest'), {
                        data: data,
                        clearCache: true,
                        method: 'get',
                        dataType: 'html',
                        result_ids: 'autosuggest_results_container',
                        callback: function (data) {
                            showResultsBox(data);
                        }
                    });
                } else {
                    if ($('#autosuggest').is(':visible')) {
                        destroyResultsBox();
                    }
                }
            }
        }, $.asSearchDelay);

    }

    function showResultsBox(data) {

        $('#autosuggest').html(data.html.autosuggest_results_container).fadeIn($.asFadeIn);
        addHoverOverlay();

        var $container = $('#autosuggest'),
                $list = $("ul.autosuggest"),
                $listItem = $("ul.autosuggest li:first"), //Getting the li element height to avoid hover effect on top of the first li element
                listItemHeight = $listItem.outerHeight(),
                wholeHeight = $("ul.autosuggest li").length * listItemHeight * 1.03, //Multiplied by a factor here to get enought space at the bottom of the list
                //wholeHeight2 = $("ul.autosuggest")[0].scrollHeight * 1.05;  //Not working correctly since it loads before all images load. Incorrect Heeight
                multiplier = wholeHeight / $.asMaxHeight;
        
        if (multiplier > 1) {
            var hiddenOffset = wholeHeight - $.asMaxHeight;
            $container
                    .css({
                        height: $.asMaxHeight + "px",
                        overflow: "hidden"
                    })
                    .bind('mousemove', function (e) {

                        var dynamicOffset = ($container.offset().top + listItemHeight) - e.pageY;
                        var topMarginOffset = (dynamicOffset / ($.asMaxHeight - listItemHeight)) * hiddenOffset;
                        if (e.pageY > ($container.offset().top + listItemHeight)) {
                            setTimeout(function () {
                                $list
                                        .animate({marginTop: topMarginOffset + "px"}, {
                                            queue: false,
                                            duration: 500,
                                            easing: 'scrollSmoothEffect'});
                            }, 75);
                        } else {
                            setTimeout(function () {
                                $list
                                        .animate({marginTop: "0px"}, {
                                            queue: false,
                                            duration: 500,
                                            easing: 'scrollSmoothEffect'});
                            }, 75);
                        }
                        ;
                    })
                    .bind('mousedown', function (event) {
                        linkRow = $('ul.autosuggest li.autosuggest-selected a');
                        if (linkRow.length > 0) {
                            var str = linkRow.text();
                            $(this).attr("value", $.trim(str));
                            if (event.which === 1) {
                                jQuery.redirect(linkRow.attr("href"));
                                destroyResultsBox();
                            }
                        }
                    }).bind('mouseenter', function () {
                $('input.ty-search-block__input').focus();
            }).bind('mouseleave', function () {
                $('input.ty-search-block__input').blur();
            });
        } else {
            $container
                    .css({
                        height: "auto"
                    })
                    .unbind('mousemove');
        }
        ;

        $("ul.autosuggest li").mouseover(function () {
            $('ul.autosuggest li.autosuggest-selected').removeClass('autosuggest-selected');
            $(this).addClass('autosuggest-selected');
        });

        $(document).click(function () {
            destroyResultsBox();
        }).on('keyup', function (event) {
            if (event.which === 27) {
                destroyResultsBox();
            }
        });
        
        $( '.scrollable' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
        e.preventDefault();
        });
        }

    function destroyResultsBox() {
        if ($('#autosuggest').length) {
            $('#autosuggest').stop().fadeOut($.asFadeOut);
            removeHoverOverlay();
        }
    }
    
    function addHoverOverlay() {
        var overlay = $("<div class='tygh-search-overlay'></div>").stop(true, true).hide().delay(300).fadeIn(300);
        if ($(".tygh-search-overlay").length === 0) {
            $(".tygh-content").prepend(overlay);
        } else {
            $(".tygh-search-overlay").stop(true, true).delay(300).fadeIn(300);
        }
    }
    function removeHoverOverlay() {
        $(".tygh-search-overlay").stop(true, true).delay(300).fadeOut(300);
    }
    
});

