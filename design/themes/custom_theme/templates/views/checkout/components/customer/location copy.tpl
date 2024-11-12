
    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title">{$block_title|default:__("lite_checkout.deliver_to")}</h2>
                </div>

                {if $show_city|default:true || $show_state|default:true}
                    {include file="views/profiles/components/profiles_scripts.tpl"}
                {/if}

                {include
                    file="views/checkout/components/profile_fields.tpl"
                    profile_fields=$profile_fields
                    section="ProfileFieldSections::SHIPPING_ADDRESS"|enum
                    exclude=$exclude_fields
                }
            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
{/if}


