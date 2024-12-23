(function (_, $) {
  function hasElemsByType(type, $elems) {
    return $elems.filter((index, elem) => $(elem).val() === type).length > 0;
  }
  $.ceEvent('on', 'ce.commoninit', function (context) {
    const $recaptchaForm = $('#update_addon_recaptcha_form', context);
    if (!$recaptchaForm.length) {
      return;
    }
    const $recaptchaFields = $('[data-ca-recaptcha-settings]', $recaptchaForm);
    const $siteKeyV3 = $('label[for^=addon_option_recaptcha_recaptcha_v3_site_key_]', $recaptchaForm);
    const $secretV3 = $('label[for^=addon_option_recaptcha_recaptcha_v3_secret_]', $recaptchaForm);
    const $siteKeyV2 = $('label[for^=addon_option_recaptcha_recaptcha_site_key_]', $recaptchaForm);
    const $secretV2 = $('label[for^=addon_option_recaptcha_recaptcha_secret_]', $recaptchaForm);
    function changeRequiredKeyFieldsByType(type, $elems) {
      const $siteKey = type === 'recaptcha_v3' ? $siteKeyV3 : $siteKeyV2;
      const $secret = type === 'recaptcha_v3' ? $secretV3 : $secretV2;
      $siteKey.toggleClass('cm-required', hasElemsByType(type, $elems));
      $secret.toggleClass('cm-required', hasElemsByType(type, $elems));
    }
    function changeRequiredKeyFields() {
      const $checkedRecaptchaFields = $recaptchaFields.filter(':checked');
      changeRequiredKeyFieldsByType('recaptcha_v3', $checkedRecaptchaFields);
      changeRequiredKeyFieldsByType('recaptcha_v2', $checkedRecaptchaFields);
    }

    // Init
    changeRequiredKeyFields();

    // Events
    $recaptchaFields.on('change', function () {
      changeRequiredKeyFields();
    });
  });
})(Tygh, Tygh.$);