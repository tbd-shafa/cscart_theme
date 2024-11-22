<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/product_subscribers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761716816_44763605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086dd465b7b8992ed29c122dcf4ea16eb1dc38b6' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/product_subscribers.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/search_product_subscribers.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:pickers/users/picker.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
  ),
),false)) {
function content_67406761716816_44763605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('email','new_subscribers','add_subscriber','add_subscribers_from_users','email','email','tools','no_data'));
?>
<div class="btn-toolbar clearfix">
        <div class="pull-left">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/search_product_subscribers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"products.update",'search'=>$_smarty_tpl->tpl_vars['product_subscribers_search']->value), 0, false);
?>
        </div>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] == $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>        
        <div class="pull-right">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "new_email_picker", null, null);?>
                <form action="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&selected_section=subscribers"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="subscribers_form_0" class=" ">
                    <div class="form-horizontal form-edit cm-tabs-content" id="content_tab_user_details">
                        <div class="control-group">
                            <label for="users_email" class="control-label cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
                            <div class="controls">
                                <input type="text" name="add_subscriber[email]" id="users_email" value="" class="span8" />
                                <input type="hidden" name="add_users[0]" id="users_id" value="0"/>
                            </div>
                        </div>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_subscribers:new_email_picker"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_subscribers:new_email_picker"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_subscribers:new_email_picker"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <div class="buttons-container">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[products.update]",'cancel_action'=>"close"), 0, false);
?>
                </div>
                </form>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <span class="shift-right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_subscribers",'text'=>$_smarty_tpl->__("new_subscribers"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'new_email_picker'),'link_text'=>$_smarty_tpl->__("add_subscriber"),'act'=>"general",'icon'=>"icon-plus"), 0, false);
?>
            </span>

            <?php if ($_smarty_tpl->tpl_vars['is_allow_update_products']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_container'=>true,'data_id'=>"subscr_user",'picker_for'=>"subscribers",'extra_var'=>"products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&selected_section=subscribers",'but_text'=>$_smarty_tpl->__("add_subscribers_from_users"),'view_mode'=>"button",'but_meta'=>"btn"), 0, false);
?>
            <?php }?>

        </div>
    <?php }?>
</div>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="subscribers_form" class="<?php if (fn_check_form_permissions('') || ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] == "Y" && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=subscribers"), ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'div_id'=>"product_subscribers",'search'=>$_smarty_tpl->tpl_vars['product_subscribers_search']->value), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['product_subscribers']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_subscribers_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
            >
                <tr>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_subscribers:manage_head"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_subscribers:manage_head"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <th class="center" width="1%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <input type="checkbox"
                               class="bulkedit-toggler hide"
                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="50%"><?php echo $_smarty_tpl->__("email");?>
</th>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_subscribers:manage_head"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_subscribers']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                <tr data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s']->value['subscriber_id'], ENT_QUOTES, 'UTF-8');?>
"
                >

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_subscribers:manage_body"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_subscribers:manage_body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <td class="center" data-th="">
                               <input type="checkbox" name="subscriber_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s']->value['subscriber_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" /></td>
                        <td data-th="<?php echo $_smarty_tpl->__("email");?>
"><input type="hidden" name="subscribers[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s']->value['subscriber_id'], ENT_QUOTES, 'UTF-8');?>
][email]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
                            <a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['s']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </td>
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_subscribers:manage_body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <td class="nowrap right" width="5%" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"delete",'href'=>"products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&selected_section=subscribers&deleted_subscription_id=".((string)$_smarty_tpl->tpl_vars['s']->value['subscriber_id'])), true);?>
</li>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <div class="hidden-tools">
                        <?php if ($_smarty_tpl->tpl_vars['is_allow_update_products']->value && (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] == $_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                        <?php }?>
                        </div>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_products_form",'object'=>"product_subscriptions",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_subscribers_table'),'is_check_all_shown'=>true), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"product_subscribers",'search'=>$_smarty_tpl->tpl_vars['product_subscribers_search']->value), 0, true);
?>

</form>
<?php }
}
