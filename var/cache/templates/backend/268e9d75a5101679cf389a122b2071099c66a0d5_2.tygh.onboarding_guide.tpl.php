<?php
/* Smarty version 4.3.0, created on 2024-11-21 01:09:14
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/onboarding_guide/views/onboarding_guide/onboarding_guide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673ef8bae0c2c5_02623739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '268e9d75a5101679cf389a122b2071099c66a0d5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/onboarding_guide/views/onboarding_guide/onboarding_guide.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/onboarding_guide/components/progress.tpl' => 1,
    'tygh:addons/onboarding_guide/components/step.tpl' => 1,
  ),
),false)) {
function content_673ef8bae0c2c5_02623739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.demo_guide_title','onboarding_guide.demo_guide_description','onboarding_guide.sb_guide_title','onboarding_guide.guide_title','onboarding_guide.completed_steps_progress','onboarding_guide.step_complete','onboarding_guide.step_close'));
if ($_smarty_tpl->tpl_vars['onboarding_guide_steps']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/addons/onboarding_guide/core.js"),$_smarty_tpl);?>


<section class="onboarding_section" id="onboarding-guide">
    <div class="onboarding_section__container">
        <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_demo']->value))) {?>
            <h3 class="onboarding_section__title">
                <?php echo $_smarty_tpl->__("onboarding_guide.demo_guide_title");?>

            </h3>
            <?php echo $_smarty_tpl->__("onboarding_guide.demo_guide_description");?>

        <?php } else { ?>
            <h3 class="onboarding_section__title">
                <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
                    <?php echo $_smarty_tpl->__("onboarding_guide.sb_guide_title");?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("onboarding_guide.guide_title");?>

                <?php }?>
            </h3>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/onboarding_guide/components/progress.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="onboarding_accordion__content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['onboarding_guide_steps']->value, 'step', false, 'step_id');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step_id']->value => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/onboarding_guide/components/step.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('step_id'=>$_smarty_tpl->tpl_vars['step_id']->value,'step'=>$_smarty_tpl->tpl_vars['step']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            'onboarding_guide.completed_steps_progress': '<?php echo strtr((string)$_smarty_tpl->__("onboarding_guide.completed_steps_progress"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            'onboarding_guide.step_complete': '<?php echo strtr((string)$_smarty_tpl->__("onboarding_guide.step_complete"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            'onboarding_guide.step_close': '<?php echo strtr((string)$_smarty_tpl->__("onboarding_guide.step_close"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        })
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
