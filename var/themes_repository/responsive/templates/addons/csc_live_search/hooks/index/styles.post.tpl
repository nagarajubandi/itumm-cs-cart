{style src="addons/csc_live_search/styles.less"}
{style src="addons/csc_live_search/animation.less"}
{assign var=cls value=$addons.csc_live_search}
{strip}
<style>
.csc_live_search_css{
	margin-top:{$cls.margin}px;	
}
.ls-container{
	border:1px solid {$cls.clr_border};
	border-radius:{$cls.border_radius}px;
	background-color:#fff;	
}
.csc_snize-arrow-outer {
	border-bottom: 15px solid {$cls.clr_border};
}
.csc_snize-arrow-inner {
	border-bottom: 13px solid {$cls.clr_top_bg};
}
.csc_live_search_total{
	background: {$cls.clr_top_bg};
	border-radius:{$cls.border_radius}px {$cls.border_radius}px 0 0;
}
.csc_live_search_total .ls_closer{
	color:{$cls.clr_btn_bg}	
}
.csc_live_search_total .ls_closer:hover{
	color:#333;	
}
.csc_template-small__item:hover{
	background:{$cls.clr_hover};
}
.csc_template-small__item:hover{
	background:{$cls.clr_hover};
}
.csc_live_search_css a{
	color:{$cls.clr_links};
}
.csc_live_search_css a:hover{
	color:{$cls.clr_links_hover};
}
.ls-show-more-block a{
	border:1px solid {$cls.clr_btn_border};
	color:{$cls.clr_btn_text};
	background:{$cls.clr_btn_bg};
	border-radius:{$cls.btn_radius}px;
}
.ls-show-more-block a:hover{
	border:1px solid {$cls.clr_btn_border_hover};
	color:{$cls.clr_btn_text_hover};
	background:{$cls.clr_btn_bg_hover};
}
</style>
{/strip}