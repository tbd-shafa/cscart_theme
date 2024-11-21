<?php
/* Smarty version 4.3.0, created on 2024-11-21 01:09:15
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/onboarding_guide/steps/vendor_plan_commissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673ef8bb012b76_09230596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f06b90c5bddd32f2d9e61f6065ebbd8eacd2db' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/onboarding_guide/steps/vendor_plan_commissions.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673ef8bb012b76_09230596 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.set_up_seller_plans_description','onboarding_guide.set_up_seller_plans','onboarding_guide.view_seller_plans_description','onboarding_guide.view_seller_plans'));
?>
<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.set_up_seller_plans_description");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("vendor_plans.manage"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.set_up_seller_plans");?>
</a>
</div>

<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.view_seller_plans_description");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom">
    <a href="<?php echo htmlspecialchars((string) fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C&redirect_url=companies.vendor_plans",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" class="og-step-complete btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.view_seller_plans");?>
 ↗</a>
</div>

<?php }
}
