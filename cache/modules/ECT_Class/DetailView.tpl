

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECT_Class'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECT_Class'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECT_Class'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='ECT_Class'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ECT_Class", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="ECT_Class_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_course.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_COURSE' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_course.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.class_course.value) <= 0}
{assign var="value" value=$fields.class_course.default_value }
{else}
{assign var="value" value=$fields.class_course.value }
{/if} 
<span class="sugar_field" id="{$fields.class_course.name}">{$fields.class_course.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_isstart.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_ISSTART' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_isstart.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.class_isstart.options)}
<input type="hidden" class="sugar_field" id="{$fields.class_isstart.name}" value="{ $fields.class_isstart.options }">
{ $fields.class_isstart.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.class_isstart.name}" value="{ $fields.class_isstart.value }">
{ $fields.class_isstart.options[$fields.class_isstart.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_isfull.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_ISFULL' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_isfull.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.class_isfull.options)}
<input type="hidden" class="sugar_field" id="{$fields.class_isfull.name}" value="{ $fields.class_isfull.options }">
{ $fields.class_isfull.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.class_isfull.name}" value="{ $fields.class_isfull.value }">
{ $fields.class_isfull.options[$fields.class_isfull.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_cost.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_COST' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_cost.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.class_cost.name}">
{sugar_number_format precision=0 var=$fields.class_cost.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_startdate.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_STARTDATE' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_startdate.hidden}
{counter name="panelFieldCount"}


{assign var="value" value=27-07-2023 }
<span class="sugar_field" id="{$fields.class_startdate.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_numberofstudents.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_NUMBEROFSTUDENTS' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_numberofstudents.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.class_numberofstudents.name}">
{sugar_number_format precision=0 var=$fields.class_numberofstudents.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_maxnumofstudent.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_MAXNUMOFSTUDENT' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_maxnumofstudent.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.class_maxnumofstudent.name}">
{sugar_number_format precision=0 var=$fields.class_maxnumofstudent.value}
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.class_enddate.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLASS_ENDDATE' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.class_enddate.hidden}
{counter name="panelFieldCount"}


{assign var="value" value=27-10-2023 }
<span class="sugar_field" id="{$fields.class_enddate.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.add_student.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADD_STUDENT' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.add_student.hidden}
{counter name="panelFieldCount"}
<span id="add_student" class="sugar_field">{include file="custom/modules/ECT_Class/tpls/editaddstudent.tpl"}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.list_student.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_STUDENT' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.list_student.hidden}
{counter name="panelFieldCount"}
<span id="list_student" class="sugar_field">{include file="custom/modules/ECT_Class/tpls/editliststudent.tpl"}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.remove_student.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REMOVE_STUDENT' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.remove_student.hidden}
{counter name="panelFieldCount"}
<span id="remove_student" class="sugar_field">{include file="custom/modules/ECT_Class/tpls/editremovestudent.tpl"}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.lecturer_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LECTURER_NAME' module='ECT_Class'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.lecturer_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.lecturer_id.value)}
{capture assign="detail_url"}index.php?module=ECT_Lecturer&action=DetailView&record={$fields.lecturer_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="lecturer_id" class="sugar_field" data-id-value="{$fields.lecturer_id.value}">{$fields.lecturer_name.value}</span>
{if !empty($fields.lecturer_id.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>