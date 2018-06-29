{script src="js/addons/abt__unitheme/abt__ut_func.js"}
{script src="js/addons/abt__unitheme/ab__gt_func.js"}

{** сохранеям в js настройки темы **}
<script type="text/javascript">
    (function(_, $) {
        $.extend(_, {
            abt__unitheme: {$settings.abt__unitheme|json_encode nofilter},
        });
    }(Tygh, Tygh.$));
</script>

    <script type="text/javascript">
        {** Функция для реализации запаздывания меню **}
        function fn_abt_timer_menu (){
            var timer, timer2, opened_menu = null, opened_menu2 = null, second_lvl;
            $('.first-lvl').hover(function () {
                var elem = $(this).children('.ty-menu__submenu');
                clearTimeout(timer);
                timer = setTimeout(function () {
                    if (opened_menu !== null) {
                        opened_menu.hide();
                        opened_menu = null;
                    }
                    opened_menu = elem.show();
                }, 200);
            });
            $('.hover-zone').mouseleave(function () {
                clearTimeout(timer);
                if (opened_menu !== null) {
                    opened_menu.hide();
                    opened_menu = null;
                }
            });

            $('.second-lvl').hover(function () {
                second_lvl = $(this);
                var elem = $(this).children('.ty-menu__submenu');
                clearTimeout(timer2);
                timer2 = setTimeout(function () {
                    if (opened_menu2 !== null) {
                        second_lvl.removeClass('hover2');
                        opened_menu2 = null;
                    }
                    $('.second-lvl').removeClass('hover2');
                    second_lvl.addClass('hover2');
                }, 200);
            });
            $('.hover-zone2').mouseleave(function () {
                clearTimeout(timer2);
                $('.second-lvl').removeClass('hover2');
                if (opened_menu2 !== null) {
                    opened_menu2.hide();
                    $('.second-lvl').removeClass('hover2');
                    opened_menu2 = null;
                }
            });
        }

        {** --------------------------------------------------------------------- **}
        {** Ищем меню требующие ajax дозагрузку **}
        {** --------------------------------------------------------------------- **}
        (function(_, $) {
            $(document).ready(function () {
                var abtam = $('div.abtam');
                if (abtam.length){
                    var ids = [];
                    abtam.each(function(){
                        ids.push($(this).attr('id'));
                    });

                    $.ceAjax('request', fn_url('abt__am.load'), {
                        result_ids: ids.join(','),
                        method: 'post',
                        hidden: true,
                        callback: function(data) {
                            fn_abt_timer_menu();
                            $(document).on('click', 'li.second-lvl > a.cm-responsive-menu-toggle', function () {
                                $(this).toggleClass('ty-menu__item-toggle-active');
                                $('.icon-down-open', this).toggleClass('icon-up-open');
                                $(this).parent().find('.cm-responsive-menu-submenu').first().toggleClass('ty-menu__items-show');
                            });
                        }
                    });
                }
            });
        }(Tygh, Tygh.$));


    </script>

    {** Fixed top panel **}
    <script type="text/javascript">
    (function(_, $) {
        $(document).ready(function () {
        var h1 =  160;
        var h2 =  300;

        var m = $('.hpo-menu');
        var b = $('.hpo-banner');
        if (m.length){
            var m_offset = m.offset();
            var m_height = m.find('.ty-dropdown-box__title').outerHeight(true) + m.find('.ty-dropdown-box__content').outerHeight(true);
            if (parseInt(b.parent().outerHeight(true)) > parseInt(m_height)){
                m_height = parseInt(b.parent().outerHeight(true));
            }

            var m_h = parseInt(m_offset.top) + parseInt(m_height);

            h1 = m_h;
            h2 = m_h + m.find('.ty-dropdown-box__title').outerHeight(true);
        }

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (document.documentElement.clientWidth > 767) {
                if (scroll >= h1) {
                    $("body").addClass("fixed-top");
                } else {
                    $("body").removeClass("fixed-top");
                }
                if (scroll >= h2) {
                    $(".fixed-top").addClass("show");
                } else {
                    $(".fixed-top").removeClass("show");
                }

                {** -------------------------------------------------------- **}

                if (m.length){
                    if (scroll >= m_h) {
                        m.removeClass('open-menu');
                        b.removeClass('open-menu-hpage-banners');
                    } else {
                        m.addClass('open-menu');
                        b.addClass('open-menu-hpage-banners');
                    }
                }
                {** -------------------------------------------------------- **}

            } else {
                if (scroll >= 88) {
                    $("body").addClass("fixed-top show");
                } else {
                    $("body").removeClass("fixed-top show");
                }
            }

            if (document.documentElement.clientWidth < 768) {
                var wh = $(window).height() - 47;
                var awh = $(window).height();
                if (scroll >= 160) {
                    $(".cat-menu-vertical .ty-dropdown-box__content").css('height', +wh + 'px');
                    $(".cat-menu-horizontal > .ty-menu__items.open").css('height', +awh + 'px');
                } else {
                    $(".cat-menu-vertical .ty-dropdown-box__content").css('height', 'inherit');
                    $(".cat-menu-horizontal > .ty-menu__items").css('height', 'inherit');
                }
            }
        });
        });
    }(Tygh, Tygh.$));

    </script>

    {** Menu shadow **}
    <script type="text/javascript">
        if (document.documentElement.clientWidth >= 768) {

            if ($('.cat-menu-vertical .ty-dropdown-box__title').hasClass('open')) {
                $('.cat-menu-vertical .ty-menu__items').removeClass('hover-zone');
            } else {
                $('.cat-menu-vertical .ty-menu__items').addClass('hover-zone');
                $('.hover-zone').hover(
                    function () {
                        $('body').addClass('shadow')
                    },
                    function () {
                        $('body').removeClass('shadow')
                    }
                );
            }

            (function (_, $) {
                $(document).ready(function () {
                    {** если нет меню с ajax-подгрузкой, запускаем запаздывание **}
                    if ($('div.abtam').length == 0){
                        fn_abt_timer_menu();
                    }
                });
            })(Tygh, Tygh.$)
        }
    </script>

    {** Toggle search button from mobile view **}
    <script type="text/javascript">
        function ShowSearch() {
            $(".search-block-grid").addClass("show");
            $(".close-button-mobile").removeClass("hidden");
            $(".adv-search-block-grid").addClass("show");
            $(".adv-cart-content-grid").addClass("hidden");
        };
        function HideSearch() {
            $(".search-block-grid").removeClass("show");
            $(".close-button-mobile").addClass("hidden");
            $(".adv-search-block-grid").removeClass("show");
            $(".adv-cart-content-grid").removeClass("hidden");
        };
    </script>

{** Hidden max height content description and features **}
<script type="text/javascript">
    (function (_, $) {
        $(document).ready(function () {
            var desc = $('div#content_features');
            var desc_div = $('div#content_features > div');
            if (desc_div.length) {
                var fh = desc_div.outerHeight();

                {** Проверяем закрыта ли вкладка? **}
                if (desc.hasClass('hidden')){
                    desc.removeClass('hidden');
                    fh = desc_div.outerHeight();
                    desc.addClass('hidden');
                }

                if (parseInt(_.abt__unitheme.hide_feature_descriptions.value) > 0 && parseInt(fh) > parseInt(_.abt__unitheme.hide_feature_descriptions.value)) {
                    desc_div.addClass('hp_features').css('max-height', _.abt__unitheme.hide_feature_descriptions.value + "px");
                    $("<a class='hpf_more'>" + "{__("more")}" + "</a>").appendTo(desc);
                }
            }
        });
    })(Tygh, Tygh.$)

    $(document).on('click', 'a.hpf_more', function () {
        $('a.hpf_more').remove();
        $('div#content_features > div').removeClass('hp_features').css('max-height', '');
    });
</script>

<script type="text/javascript">
    (function (_, $) {
        $(document).ready(function () {
            var desc = $('div#content_description');
            var desc_div = $('div#content_description > div');
            if (desc_div.length) {
                var fh = desc_div.outerHeight();
                if (parseInt(_.abt__unitheme.hide_product_description.value) > 0 && parseInt(fh) > parseInt(_.abt__unitheme.hide_product_description.value)) {
                    desc_div.addClass('hp_description').css('max-height', _.abt__unitheme.hide_product_description.value + "px");
                    $("<a class='hpd_more'>" + "{__("more")}" + "</a>").appendTo(desc);
                }
            }
        });
    })(Tygh, Tygh.$)

    $(document).on('click', 'a.hpd_more', function () {
        $('a.hpd_more').remove();
        $('div#content_description > div').removeClass('hp_description').css('max-height', '');
    });
</script>

{** Toggle buttos from view filters and subcategories **}
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {

            $(document).on('click', '.cat-menu-vertical .ty-mainbox-title', function () {
                $('.cat-menu-vertical .ty-mainbox-body').toggleClass('view');
                $('.cat-menu-vertical .ty-mainbox-title').toggleClass('open');
            });

            $(document).on('click', '.cat-product-filters .ty-mainbox-title', function () {
                $('.cat-product-filters .ty-mainbox-body').toggleClass('view');
                $('.cat-product-filters .ty-mainbox-title').toggleClass('open');
            });

            $(document).on('click', '.cat-product-filters .ty-product-filters__close-button', function () {
                $('.cat-product-filters .ty-mainbox-title').trigger('click');
            });

        });
    })(jQuery);
</script>
