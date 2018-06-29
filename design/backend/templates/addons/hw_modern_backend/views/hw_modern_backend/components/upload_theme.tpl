<div class="install-addon" id="theme_upload_container">
    <form action="{""|fn_url}" method="post" name="addon_upload_form" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="theme_upload_container" />
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="{$images_dir}/addon_box.png" width="151px" height="141px" />
            <p class="install-addon-text">{__("hwmb_install_theme_text")}</p>
            {include file="common/fileuploader.tpl" var_name="theme_pack[0]"}
        </div>

        <div class="buttons-container">
            {include file="buttons/save_cancel.tpl" but_name="dispatch[hw_modern_backend.upload]" cancel_action="close" but_text=__("upload")}
        </div>
    </form>
<!--theme_upload_container--></div>