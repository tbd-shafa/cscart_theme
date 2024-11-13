<?php
/* Smarty version 4.3.0, created on 2024-11-13 02:52:40
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/payments/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673484f8afe7d0_83908834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1428ce060b3b0f167281f4b64550bc5126c0b8c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/payments/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/payments/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_673484f8afe7d0_83908834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data','new_payments','add_payment','add_payment','payment_methods'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
var processor_descriptions = [];
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_processors']->value, 'payment_category');
$_smarty_tpl->tpl_vars['payment_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment_category']->value) {
$_smarty_tpl->tpl_vars['payment_category']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_category']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        processor_descriptions[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['processor_id'], ENT_QUOTES, 'UTF-8');?>
] = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['p']->value['description'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
function fn_switch_processor(payment_id, processor_id)
{
    Tygh.$('#tab_conf_' + payment_id).toggleBy(processor_id == 0);

    var update_url = fn_url('payments.update?payment_id=' + payment_id + '&processor_id=' + processor_id);
    Tygh.$.ceAjax('request', update_url, {
        result_ids: 'content_tab_details_properties_*'
    });

    if (processor_id != 0) {
        var url = fn_url('payments.processor?payment_id=' + payment_id + '&processor_id=' + processor_id);
        Tygh.$('#tab_conf_' + payment_id + ' a').prop('href', url);
        Tygh.$('#elm_payment_tpl_' + payment_id).prop('disabled', true);
        Tygh.$('[name="payments_form_' + payment_id + '"] [data-ca-payment="templateControlGroup"]').addClass('hidden');
        Tygh.$('#elm_payment_instructions_' + payment_id).ceEditor('destroy');
        if (processor_descriptions[processor_id]) {
            Tygh.$('#elm_processor_description_' + payment_id).html(processor_descriptions[processor_id]).show();
        } else {
            Tygh.$('#elm_processor_description_' + payment_id).hide();
        }

        Tygh.$('#elm_payment_instructions_' + payment_id).ceEditor('recover');

        Tygh.$.ceAjax('request', url, {
            result_ids: 'content_tab_details_*,content_tab_conf_*'
        });
    } else {
        Tygh.$('#elm_payment_tpl_' + payment_id).prop('disabled', false);
        Tygh.$('[name="payments_form_' + payment_id + '"] [data-ca-payment="templateControlGroup"]').removeClass('hidden');
        Tygh.$('#content_tab_conf_' + payment_id).html('<!--content_tab_conf_' + payment_id + '-->');
        Tygh.$('#elm_processor_description_' + payment_id).hide();
    }
}
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_assignInScope('skip_delete', false);
$_smarty_tpl->_assignInScope('draggable', (($tmp = $_smarty_tpl->tpl_vars['is_allow_update_payments']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_payments_form" id="manage_payments_form">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"payments"), 0, false);
if ($_smarty_tpl->tpl_vars['payments']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "payments_table", null, null);?>
<div class="items-container payment-methods <?php if ($_smarty_tpl->tpl_vars['draggable']->value) {?>cm-sortable<?php }?>"
     <?php if ($_smarty_tpl->tpl_vars['draggable']->value) {?>data-ca-sortable-table="payments" data-ca-sortable-id-name="payment_id"<?php }?>
     id="payments_list">
<div class="table-responsive-wrapper longtap-selection">
    <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles payment-methods__list">
        <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
        >
        <tr>
            <th>
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) !== "vendor") {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <input type="checkbox"
                           class="bulkedit-toggler hide"
                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                <?php }?>
            </th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment', false, 'pf');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pf']->value => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
                <?php if (fn_allowed_for("ULTIMATE")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] != $_smarty_tpl->tpl_vars['payment']->value['company_id']) {?>
                        <?php $_smarty_tpl->_assignInScope('skip_delete', true);?>
                        <?php $_smarty_tpl->_assignInScope('hide_for_vendor', true);?>

                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('skip_delete', false);?>
                        <?php $_smarty_tpl->_assignInScope('hide_for_vendor', false);?>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_status'] == "D") {?>
                    <?php $_smarty_tpl->_assignInScope('status', "D");?>
                    <?php $_smarty_tpl->_assignInScope('can_change_status', false);?>
                    <?php $_smarty_tpl->_assignInScope('display', "text");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['payment']->value['status']);?>
                    <?php $_smarty_tpl->_assignInScope('can_change_status', true);?>
                    <?php $_smarty_tpl->_assignInScope('display', '');?>
                <?php }?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tool_items", null, null);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_data", null, null);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:extra_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:extra_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:extra_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'text'=>$_smarty_tpl->tpl_vars['payment']->value['payment'],'status'=>$_smarty_tpl->tpl_vars['status']->value,'href'=>"payments.update?payment_id=".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'object_id_name'=>"payment_id",'table'=>"payments",'href_delete'=>"payments.delete?payment_id=".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'delete_target_id'=>"payments_list,pagination_contents",'skip_delete'=>$_smarty_tpl->tpl_vars['skip_delete']->value,'header_text'=>$_smarty_tpl->tpl_vars['payment']->value['payment'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'no_table'=>true,'draggable'=>$_smarty_tpl->tpl_vars['draggable']->value,'can_change_status'=>$_smarty_tpl->tpl_vars['can_change_status']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'tool_items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tool_items'),'extra_data'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra_data'),'is_bulkedit_menu'=>(defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) !== "vendor",'checkbox_col_width'=>"1%",'checkbox_name'=>"payment_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_payments_form",'object'=>"payments",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payments_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
    <!--payments_list--></div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"payments"), 0, true);
?>
</form>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_update_payments']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/payments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('payment'=>array(),'hide_for_vendor'=>false), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_payments",'text'=>$_smarty_tpl->__("new_payments"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__("add_payment"),'link_text'=>$_smarty_tpl->__("add_payment"),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary nav__actions-btn-primary"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("payment_methods"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0, false);
}
}
