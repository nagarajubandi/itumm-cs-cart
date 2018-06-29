
(function (_, $) {
	$( document ).ready(function() {
		$('#hwmb_settings > i').click(function(){
			$('#hwmb_settings').toggleClass('open');
		});

		$('.hwmd_acc h3').click(function(){
			$(this).parent().toggleClass('open');
			fn_hw_modern_backend_resize();
		});

		//COLORS
		$('.hwmd_theme_color ul li span').click(function(){
			if($(this).parent().hasClass('active')) return false;
			$('.hwmd_theme_color ul li').each(function(){ $(this).removeClass('active'); });
			$(this).parent().addClass('active');
			$(this).parent().parent().parent().find('input[type=hidden]').val($(this).parent().data('id'));
			fn_hw_modern_backend_activate();
		});

		$('.hwmd_boxed_bgs ul li img, .hwmd_boxed_bgs ul li span').click(function(){
			if($(this).parent().hasClass('active')) return false;
			$('.hwmd_boxed_bgs ul li').removeClass('active');
			$(this).parent().addClass('active');
			$(this).parent().parent().parent().find('input[type=hidden]').val($(this).parent().data('id'));
			fn_hw_modern_backend_activate();
		});		

		//LAYOUT
		$('.hwmd_styles li a').click(function(){
			if($(this).parent().hasClass('active')) return false;
			$('.hwmd_styles li').removeClass('active');
			$(this).parent().addClass('active');
			$(this).parent().parent().parent().find('input[type=hidden]').val($(this).parent().data('id'));

			if($(this).parent().data('id')==1){ $('body').addClass('hwmd_boxed');
			}else{ $('body').removeClass('hwmd_boxed'); }

			fn_hw_modern_backend_activate();
		});

		$('.hwmd_fonts').find('select').change(function(){ fn_hw_modern_backend_activate(); });
		fn_hw_modern_backend_init();
	});

	function fn_hw_modern_backend_init(){
		/* INIT */
		$('a.brand > i').removeClass().addClass('icon-shopping-cart icon-white');
		$('.nav a.home > i').removeClass().addClass('icon-home');
		$('#header_navbar i.icon-user').removeClass().addClass('icon-white icon-user');
		if($('.admin-content').height()>$(window).height()){
			$('#main_column .admin-content').css('height', 'auto');//shadow fix
		}

		fn_hw_modern_backend_tooltips();
		if(!$('#hwmb_settings').length) return false; //exit
		fn_hw_modern_backend_resize();
	}

	function fn_hw_modern_backend_resize(){
		$('#hwmb_settings').css('margin-top', '-'+($('.hwmb_settings_body').outerHeight()/2)+'px').find('i').eq(0).show();
	}

	function fn_hw_modern_backend_activate(){
		var _hwmb_data = {};
		$('.hwmb_data').each(function(){ _hwmb_data[$(this).data('field')] = $(this).val(); });
		$('.hwmb_data_select').each(function(){ _hwmb_data[$(this).data('field')] = $(this).find('option:selected').val(); });

		$.ceAjax('request',  fn_url('hw_modern_backend.save'), {
			method: 'get',
			data:  _hwmb_data,
			hidden: false,
			callback: function(store) {
				//fonts
				if($('#hwmd_settings_font').find('option:selected').val() != 133){ //except default
					_font = '//fonts.googleapis.com/css?family='+$('#hwmd_settings_font').find('option:selected').data('font')+':400,700';
					if($('#hwmd_font').length == 0){ $('head').append( $('<link rel="stylesheet" type="text/css" id="hwmd_font" />').attr('href', _font ) );
					}else{ $('#hwmd_font').attr('href', _font ); }
				}

				_timestamp = new Date().getTime();
				_css = fn_url('hw_modern_backend.css&store_id='+store.text+'&'+_timestamp);

				$('head').append( $('<link rel="stylesheet" type="text/css" id="hwmd" />').attr('href', _css ) );
			}
		});


	}

	function fn_hw_modern_backend_tooltips(){
		$('body').append('<div id="hwmb-tooltip"></div>');
		var _hwmb_tooltip = $('#hwmb-tooltip');

		$('.hwmd_theme_color li span, .hwmd_colors_list').hover(function(){
		         _title = $(this).attr('title');
		        $(this).removeAttr('title');
		        $(this).data('title', _title);
		        _hwmb_tooltip.html('<h2>'+_title+'</h2><div class="hwmb-tooltip-colors"><span style="background:'+$(this).parent().data('color1')+'"></span><span style="background:'+$(this).parent().data('color2')+'"></span><span style="background:'+$(this).parent().data('color3')+'"></span><span style="background:'+$(this).parent().data('color4')+'"></span></div>').show();
		}, function() {
		        _hwmb_tooltip.html('').hide();
		        $(this).attr('title', $(this).data('title'));
		}).mousemove(function(e) {
		        var mousex =  e.pageX - 13;
		        var mousey = e.pageY + 35;
		        _hwmb_tooltip.css({ top: mousey, left: mousex });
		});


		$('.hwmd_boxed_bgs li, .hwmd_bg_item').hover(function(){
		         	_title = $(this).attr('title');
		        	$(this).removeAttr('title');
		        	$(this).data('title', _title);
		        	_hwmb_tooltip.html('<h2>'+_title+'</h2><div class="hwmb-tooltip-bgs"><span style="background:'+$(this).data('color')+' url('+$(this).data('image')+')"></span></div>').show();
		}, function() {
		        	_hwmb_tooltip.html('').hide();
		        	$(this).attr('title', $(this).data('title'));
		}).mousemove(function(e) {
		        	var mousex =  e.pageX - 13;
		        	var mousey = e.pageY + 35;
		        	_hwmb_tooltip.css({ top: mousey, left: mousex });
		});

		$('.hwmd_font_list').hover(function(){
		         	_title = $(this).attr('title');
		        	$(this).removeAttr('title');
		        	$(this).data('title', _title);

			_font = '//fonts.googleapis.com/css?family='+$(this).data('font')+':400';
			if($('#hwmd_font_preview_'+$(this).data('id')).length == 0){
				$('head').append( $('<link id="hwmd_font_preview_'+$(this).data('id')+'" rel="stylesheet" type="text/css"/>').attr('href', _font ) );
			}
			_hwmb_tooltip.html('<p  style="font-family:\''+_title+'\',sans-serif">'+_title+'</p>').show();
		}, function() {
		        _hwmb_tooltip.html('').hide();
		        $(this).attr('title', $(this).data('title'));
		}).mousemove(function(e) {
		        var mousex =  e.pageX - 13;
		        var mousey = e.pageY + 35;
		        _hwmb_tooltip.css({ top: mousey, left: mousex });
		});
	}	

})(Tygh, Tygh.$); 