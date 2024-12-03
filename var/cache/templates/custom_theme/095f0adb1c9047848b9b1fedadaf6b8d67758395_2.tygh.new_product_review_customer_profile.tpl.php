<?php
/* Smarty version 4.3.0, created on 2024-12-02 21:53:59
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674e9cf7863536_93350349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '095f0adb1c9047848b9b1fedadaf6b8d67758395' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674e9cf7863536_93350349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','city','city','city','city','city','country','country','country','country','select_country','select_country','select_country','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','city','city','city','city','city','country','country','country','country','select_country','select_country','select_country'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['auth']->value['user_id'] ? $_smarty_tpl->tpl_vars['user_data']->value['s_country'] : '');
$_smarty_tpl->_assignInScope('user_name', $_smarty_tpl->tpl_vars['user_info']->value['lastname'] ? ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']) : $_smarty_tpl->tpl_vars['user_info']->value['firstname']);?>

<div class="ty-product-review-new-product-review-customer-profile">

    <div class="ty-product-review-new-product-review-customer-profile__name ty-width-full">
        <label class="cm-required cm-trim hidden ty-product-review-new-product-review-customer-profile__name-label"
            data-ca-product-review="newProductReviewCustomerProfileNameLabel"
            for="product_review_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>

        </label>
        <input type="text"
            id="product_review_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="product_review_data[name]"
            value="<?php if ($_smarty_tpl->tpl_vars['product_review_data']->value['name']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_data']->value['name'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');
}?>"
            class="ty-product-review-new-product-review-customer-profile__name-input ty-input-text-full"
            data-ca-product-review="newProductReviewCustomerProfileNameInput"
            data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            data-ca-product-review-label="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
"
            placeholder="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            title="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
        />
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] !== "none") {?>
        <div class="ty-product-review-new-product-review-customer-profile__location">
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "city") {?>
                <div class="ty-product-review-new-product-review-customer-profile__city ty-width-full">
                    <label class="cm-required cm-trim hidden ty-product-review-new-product-review-customer-profile__city-label"
                        data-ca-product-review="newProductReviewCustomerProfileCityLabel"
                        for="product_review_city_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("city");?>

                    </label>
                    <input type="text"
                        id="product_review_city_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        name="product_review_data[city]"
                        value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');
}?>"
                        class="ty-product-review-new-product-review-customer-profile__city-input ty-input-text-full"
                        placeholder="<?php echo $_smarty_tpl->__("city");?>
 *"
                        title="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCityInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("city");?>
"
                    />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "country") {?>
                <div class="ty-product-review-new-product-review-customer-profile__country ty-width-full">
                    <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__country-label"
                        data-ca-product-review="newProductReviewCustomerProfileCountryLabel"
                        for="product_review_country_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("country");?>

                    </label>
                    <select id="product_review_country_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="ty-product-review-new-product-review-customer-profile__country-input ty-input-text-full ty-input-height cm-country cm-location-shipping"
                        name="product_review_data[country_code]"
                        title="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCountryInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("country");?>
"
                        data-ca-product-review-option-required="— <?php echo $_smarty_tpl->__("select_country");?>
 — *"
                        data-ca-product-review-option="— <?php echo $_smarty_tpl->__("select_country");?>
 —"
                    >
                        <option value="">— <?php echo $_smarty_tpl->__("select_country");?>
 — *</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value === $_smarty_tpl->tpl_vars['_country']->value) {?> selected<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['auth']->value['user_id'] ? $_smarty_tpl->tpl_vars['user_data']->value['s_country'] : '');
$_smarty_tpl->_assignInScope('user_name', $_smarty_tpl->tpl_vars['user_info']->value['lastname'] ? ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']) : $_smarty_tpl->tpl_vars['user_info']->value['firstname']);?>

<div class="ty-product-review-new-product-review-customer-profile">

    <div class="ty-product-review-new-product-review-customer-profile__name ty-width-full">
        <label class="cm-required cm-trim hidden ty-product-review-new-product-review-customer-profile__name-label"
            data-ca-product-review="newProductReviewCustomerProfileNameLabel"
            for="product_review_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>

        </label>
        <input type="text"
            id="product_review_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="product_review_data[name]"
            value="<?php if ($_smarty_tpl->tpl_vars['product_review_data']->value['name']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_data']->value['name'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');
}?>"
            class="ty-product-review-new-product-review-customer-profile__name-input ty-input-text-full"
            data-ca-product-review="newProductReviewCustomerProfileNameInput"
            data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            data-ca-product-review-label="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
"
            placeholder="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            title="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
        />
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] !== "none") {?>
        <div class="ty-product-review-new-product-review-customer-profile__location">
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "city") {?>
                <div class="ty-product-review-new-product-review-customer-profile__city ty-width-full">
                    <label class="cm-required cm-trim hidden ty-product-review-new-product-review-customer-profile__city-label"
                        data-ca-product-review="newProductReviewCustomerProfileCityLabel"
                        for="product_review_city_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("city");?>

                    </label>
                    <input type="text"
                        id="product_review_city_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        name="product_review_data[city]"
                        value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');
}?>"
                        class="ty-product-review-new-product-review-customer-profile__city-input ty-input-text-full"
                        placeholder="<?php echo $_smarty_tpl->__("city");?>
 *"
                        title="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCityInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("city");?>
"
                    />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location'] === "country") {?>
                <div class="ty-product-review-new-product-review-customer-profile__country ty-width-full">
                    <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__country-label"
                        data-ca-product-review="newProductReviewCustomerProfileCountryLabel"
                        for="product_review_country_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("country");?>

                    </label>
                    <select id="product_review_country_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="ty-product-review-new-product-review-customer-profile__country-input ty-input-text-full ty-input-height cm-country cm-location-shipping"
                        name="product_review_data[country_code]"
                        title="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCountryInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("country");?>
"
                        data-ca-product-review-option-required="— <?php echo $_smarty_tpl->__("select_country");?>
 — *"
                        data-ca-product-review-option="— <?php echo $_smarty_tpl->__("select_country");?>
 —"
                    >
                        <option value="">— <?php echo $_smarty_tpl->__("select_country");?>
 — *</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value === $_smarty_tpl->tpl_vars['_country']->value) {?> selected<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php }
}
}
