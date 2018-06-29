{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="ab__ut_demo_data_form" id="ab__ut_demo_data_form">
<h3>{__("abt__ut.demo_data.head")}</h3>
<table class="table" width="100%">
<thead>
<tr>
<th width="60%">{__("abt__ut.demo_data.table.description")}</th>
<th width="20%">{__("abt__ut.demo_data.table.action")}</th>
</tr>
</thead>
<tbody>
<tr>
<td>{__("abt__ut.demo_data.actions.add_banners")}</td>
<td>{btn type="list" class="cm-ajax1 cm-post btn btn-primary" text=__("add") dispatch="dispatch[abt__ut.demo_data.add_banners]"}</td>
</tr>
</tbody>
</table>
</form>
{/capture}
{include file="common/mainbox.tpl"
title=__("abt__ut.demo_data")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
content_id="ab__ut_demo_data_form"}