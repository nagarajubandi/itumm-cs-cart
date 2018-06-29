{capture name="item"}
    <a href="{$filter_base_url|fn_url}" rel="nofollow" class="ty-product-filters__reset-button cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".ty-mainbox-title" data-ca-target-id="{$ajax_div_ids}"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> {__("reset")}</a>
    <a href="" rel="nofollow" class="ty-btn ty-btn__secondary ty-product-filters__close-button cm-ajax hidden-desktop hidden-tablet" data-ca-scroll=".ty-mainbox-title"><i class="ty-icon-cancel-circle"></i> {__("close")}</a>
{/capture}
{seohide string=$smarty.capture.item}