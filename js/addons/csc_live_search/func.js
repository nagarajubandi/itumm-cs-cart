var ls_q = "";
(function(_, $){
    $.ceEvent('on', 'ce.commoninit', function(context) {		
		  var input = $("form[name='search_form'] input[type='text']");
		  input.addClass("csc_no_transition");
		  input.attr('autocomplete', 'off');	  
		  input.click(function(){				
			  $(this).parent().find(".csc_live_search_css").show();
		  });
		  $(document).click(function(event) {
				if ($(event.target).closest(".ls_closer").length){
				  $(".csc_live_search_css").hide(150);
				}
				if ($(event.target).closest(".csc_live_search_css").length) return;
				if ($(event.target).closest("form[name='search_form'] input[type='text']").length) return;
				$(".csc_live_search_css").hide();
				event.stopPropagation();
		  });		  
		  $(input).on("keyup paste", function(e){						
			  if (typeof myTimer !== 'undefined') {
				  clearInterval(myTimer);	
			  }							
			  var k = e.which;
			  var c = String.fromCharCode(e.which);				
			  if (k>45 || k==8 || k==32 || k==17 || !k ){			  
				  block_id = $(this).parent().find('.csc_live_search_css').data('ls-block-id');
				  minchars = $('#csc_livesearch_'+block_id).data('ls-min');
				  current_field = $(this);				  
				  myTimer = setTimeout(function(){
					q =$(current_field).val();	
				  	$(current_field).addClass('csc_live_search_loading');											
					cls_showResult(q, 1, 'csc_livesearch', false, block_id, minchars);
				  }, 500, $(current_field));						
			  }			
		  });			
		  $('.ls-show-more').click(function(){
			  block_id = $(this).data('ls-block-id');
			  minchars = $('#csc_livesearch_'+block_id).data('ls-min');			  
			  $(this).hide();	
			  $(this).parent().find('.ls-show-more-loading').show();						
			  cls_showResult($(this).data('ls-q'), $(this).data('ls-page'), 'ls_products', true, block_id, minchars);		  	  
		  });
	});	
})(Tygh, Tygh.$);

function fn_hide_loading_block(){
	$('.ls_products').find('.ls-show-more-block').remove();
}
function fn_csls_detect_is_iphone(){
	//isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
	isIphone = !!navigator.userAgent.match(/iPhone/i);	
	return isIphone;
}

function fn_hide_loading_input(animate){
	$('.csc_no_transition').removeClass('csc_live_search_loading');
	fn_csc_live_search_highlightSearch(ls_q);
	
	if (fn_csls_detect_is_iphone()){
		if (animate){
			height =0
			$('.cls_search_result .csc_live_search_tree').each(function(){
				height = height+$(this).height();
			});			
			$('.cls_search_result').animate(
				{ scrollTop: height}, 300);
		}	
	}
}
function cls_showResult(q, page, ids, append, block_id, minchars) {
	if (q.length < minchars) {
	  $(".csc_live_search_css").html("");		
	  $(".csc_live_search_css").css("border", "0px");
	  fn_hide_loading_input(false);
	  return;
	}else{
	  $(".csc_live_search_css").show();	  
	}
	ls_q = q;	
	url=fn_url('products.csc_live_search?page='+page+'&q='+encodeURIComponent(q));
	is_iphone=false;
	if (append && fn_csls_detect_is_iphone()){
		append=false;
		is_iphone=true;			
	}
	var params={
			'method': 'POST',
			'result_ids':ids+"_"+block_id,
			'pre_processing':fn_hide_loading_block,
			'callback':function(){fn_hide_loading_input(is_iphone)},
			'hidden':true,
			'caching':true,
			'append':append,			
			'skip_result_ids_check':true,
			'data':{
				'block_id':block_id
			}		
		};
	$.ceAjax('request', url, params);
	return true;	
}	
function fn_csc_live_search_highlightSearch(text) {
    var query = new RegExp("(" + text+")", "gim");
    var data = document.getElementsByClassName("csc_no_line");
    
   for (var i = 0; i < data.length; ++i) {
    	var e = data[i].innerHTML;
	var enew = e.replace(/(<b>|<\/b>)/igm, "");
	    document.getElementsByClassName("csc_no_line")[i].innerHTML = enew;
	    var newe = enew.replace(query, "<b>$1</b>");
	    document.getElementsByClassName("csc_no_line")[i].innerHTML = newe;	   
	}
}