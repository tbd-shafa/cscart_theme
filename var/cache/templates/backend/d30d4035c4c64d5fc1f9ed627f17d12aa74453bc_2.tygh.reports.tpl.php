<?php
/* Smarty version 4.3.0, created on 2024-12-09 03:42:17
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/tbd_admin_report/views/settings/reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6756d7995cb5b9_71599460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd30d4035c4c64d5fc1f9ed627f17d12aa74453bc' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/tbd_admin_report/views/settings/reports.tpl',
      1 => 1733730526,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/daterange_picker.tpl' => 1,
    'tygh:addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/analytics_card.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6756d7995cb5b9_71599460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data','dashboard'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function (_, $) {
    $(_.doc).ready(function () {
        var dashboardUrl = 'settings.reports',
        $storefrontPicker = $('#storefront_id');
        if ($storefrontPicker.length) {
        dashboardUrl += '?' + $storefrontPicker.prop('name') + '=' + $storefrontPicker.val();
        }
        $.ceAjax('request', fn_url(dashboardUrl), {
        result_ids: 'report_content',
        hidden: true
        });
    });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"dashboard_date_picker",'extra_class'=>"nav__actions-dashboard-date-picker pull-right",'data_url'=>fn_url("settings.reports?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)),'result_ids'=>"report_content",'start_date'=>$_smarty_tpl->tpl_vars['time_from']->value,'end_date'=>$_smarty_tpl->tpl_vars['time_to']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
     <section class="analytics-section">
        <h2 class="analytics-section__title">
            Reports
        </h2>
        <div class="analytics-section__content">
            <?php if ($_smarty_tpl->tpl_vars['dashboard_blocks']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dashboard_blocks']->value, 'blocks', false, 'section_id');
$_smarty_tpl->tpl_vars['blocks']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_id']->value => $_smarty_tpl->tpl_vars['blocks']->value) {
$_smarty_tpl->tpl_vars['blocks']->do_else = false;
?>
                    <div class="analytics-section__column analytics-section__column--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/analytics_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('analytics_card'=>$_smarty_tpl->tpl_vars['block']->value), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="analytics-section__no-items no-items">
                    <?php echo $_smarty_tpl->__("no_data");?>

                </div>
            <?php }?>
        </div>
    </section>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'no_sidebar'=>true,'title'=>$_smarty_tpl->__("dashboard"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'tools'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools'),'box_id'=>"report_content",'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value), 0, false);
}
}
