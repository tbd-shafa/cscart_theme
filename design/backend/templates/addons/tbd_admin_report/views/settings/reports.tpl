<script>
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
</script>

{capture name="buttons"}
    {include file="common/daterange_picker.tpl"
        id="dashboard_date_picker"
        extra_class="nav__actions-dashboard-date-picker pull-right"
        data_url="settings.reports?storefront_id={$storefront_id}"|fn_url
        result_ids="report_content"
        start_date=$time_from
        end_date=$time_to
    }
{/capture}

{capture name="mainbox"}
     <section class="analytics-section">
        <h2 class="analytics-section__title">
            Reports
        </h2>
        <div class="analytics-section__content">
            {if $dashboard_blocks}
                {foreach $dashboard_blocks as $section_id => $blocks}
                    <div class="analytics-section__column analytics-section__column--{$section_id}">
                        {foreach $blocks as $block}
                            {include file="addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/analytics_card.tpl" analytics_card=$block}
                        {/foreach}
                    </div>
                {/foreach}
            {else}
                <div class="analytics-section__no-items no-items">
                    {__("no_data")}
                </div>
            {/if}
        </div>
    </section>


{/capture}

{include
    file="common/mainbox.tpl"
    buttons=$smarty.capture.buttons
    no_sidebar=true
    title=__("dashboard")
    content=$smarty.capture.mainbox
    tools=$smarty.capture.tools
    box_id="report_content"
    select_storefront=true
    show_all_storefront=true
    storefront_switcher_param_name="storefront_id"
    selected_storefront_id=$storefront_id
}
