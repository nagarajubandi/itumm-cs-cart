(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function() {
        
        $(".custom-menu__item").on( "click", function() {
            
            if ($(this).hasClass('active-tmi')) {
                return false;
            } else {
                $(document.body).addClass('overflow').prepend('<div class="mfp-bg"></div>');
                var $this = $(this);
                var $menu = $this.find('.ty-menu__submenu-items');
                $menu.show();
                $(this).addClass('active-tmi');
            }
        });
        
        $(".child-elm").on( "click", function() {
            var $this = $(this);
            var $subMenu = $this.parents('li.ty-top-mine__submenu-col').find('.ty-menu__submenu');
            
            if ($subMenu) {
                $subMenu.addClass('active-menu');
            }
        });
        
        $(".to-back").on( "click", function() {
            $(this).parents('.ty-menu__submenu').removeClass('active-menu');
        });
        
        $(".to-link").on( "click", function() {
            url = $(this).attr('href');
            window.location = url;
        });
        
        $(".ty-footer-general__header").on( "click", function() {
            var $this = $(this);

            if ($this.next().hasClass('show')) {
                $this.next().removeClass('show');
            } else {
                $(".ty-footer-general__body").removeClass('show');
                $this.next().addClass('show');
            }
        });

        $(document).click(function(event) {
            if ($(event.target).closest(".ty-footer").length) return;
            $(".ty-footer-general__body").removeClass('show');
            event.stopPropagation();
        });
        
        $(document).on('click', function(event){
            if ($(event.target).closest(".top-menu, .cm-combination").length) {
                console.log($(event.target));
                return;
            } else {
                $(".ty-menu__item").removeClass('active-tmi');
                $(".ty-menu__submenu-items").hide();
                $(document.body).removeClass('overflow');
                $('.mfp-bg').remove();
                event.stopPropagation();
            }
        });
		
    });
}(Tygh, Tygh.$));