{$city = $user_data.s_city}
{$state_descr = $user_data.s_state_descr}
{$state = $user_data.s_state}
{$zipcode = $user_data.s_zipcode}
{$country = $user_data.s_country}
 <div class="col-lg-12 col-md-12">
 
{hook name="checkout:location_city"}
<div class="litecheckout__field litecheckout__field--fill cm-field-container"
    data-ca-error-message-target-method="append">
     <p><label class="litecheckout__label cm-required" for="litecheckout_city" style="font-size: 16px;">City </label></p>  
    <input type="text"
           data-ca-lite-checkout-field="user_data.s_city"
           id="litecheckout_city"
           data-ca-lite-checkout-element="city"
           data-ca-lite-checkout-last-value="{$city}"
           placeholder=" "
           value="{$city}"
           class="litecheckout__input"
    />
    
</div>
{/hook}
 </div>