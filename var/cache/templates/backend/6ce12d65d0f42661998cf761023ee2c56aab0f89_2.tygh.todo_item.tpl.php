<?php
/* Smarty version 4.3.0, created on 2024-11-20 20:31:43
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/index/components/todo_section/todo_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673eb7aff2e6f0_52375519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce12d65d0f42661998cf761023ee2c56aab0f89' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/index/components/todo_section/todo_item.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673eb7aff2e6f0_52375519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['todo_item']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['todo_item']->value['action_text'] && $_smarty_tpl->tpl_vars['todo_item']->value['action_url']) {?>
        <div class="todo-item todo-item--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                <div class="todo-item__content"><?php echo $_smarty_tpl->tpl_vars['todo_item']->value['text'];?>
</div>
                <div class="todo-item__actions">
                    <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['todo_item']->value['action_url']), ENT_QUOTES, 'UTF-8');?>
" class="btn todo-item__button <?php if ($_smarty_tpl->tpl_vars['todo_item']->value['is_ajax_action']) {?>cm-ajax<?php }?>">
                        <?php echo $_smarty_tpl->tpl_vars['todo_item']->value['action_text'];?>

                    </a>
                </div>
            </div>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php } elseif ($_smarty_tpl->tpl_vars['todo_item']->value['action_url']) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['todo_item']->value['action_url']), ENT_QUOTES, 'UTF-8');?>
" class="todo-item todo-item--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 todo-item--link" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 todo-item__inner--no-responsive">
                <div class="todo-item__content"><?php echo $_smarty_tpl->tpl_vars['todo_item']->value['text'];?>
</div>
                <div class="todo-item__actions">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-chevron-right todo-item__button-icon"),$_smarty_tpl);?>

                </div>
            </div>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></a>
    <?php } else { ?>
        <div class="todo-item todo-item--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_item']->value['type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                <div class="todo-item__content"><?php echo $_smarty_tpl->tpl_vars['todo_item']->value['text'];?>
</div>
            </div>
        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
}
}
}
