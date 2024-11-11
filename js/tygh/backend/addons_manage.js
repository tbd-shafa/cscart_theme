(function (_, $) {
  $(document).ready(function () {
    var $tables = $('.table-addons.cm-filter-table'),
      $addon_status = $('#elm_addon_status'),
      $addon_source = $('#elm_addon_source');
    $.ceEvent('on', 'ce.commoninit', function (context) {
      var $temp_tables = context.find('.table-addons.cm-filter-table');
      if ($temp_tables.length) {
        $tables = $temp_tables;
        $tables.ceFilterTable('filter');
      }
    });
    $.ceEvent('on', 'ce.filter_table_show_items', function (container, data) {
      if (!container.hasClass('table-addons')) {
        return;
      }
      var status = $addon_status.val(),
        source = $addon_source.val();
      switch (status) {
        case 'not_installed':
          data.items = data.items.filter('.filter_status_N');
          break;
        case 'installed':
          data.items = data.items.filter('.filter_status_A,.filter_status_D');
          break;
        case 'active':
          data.items = data.items.filter('.filter_status_A');
          break;
        case 'disabled':
          data.items = data.items.filter('.filter_status_D');
          break;
      }
      if (source) {
        data.items = data.items.filter(i => data.items[i].dataset['supplier'] == source);
      }
    });
    $addon_status.on('change', function () {
      $tables.ceFilterTable('filter');
    });
    $addon_source.on('change', function () {
      $tables.ceFilterTable('filter');
    });
    $.ceAjax('request', fn_url('addons.manage?check_upgrades=Y'), {
      result_ids: 'elm_sidebar_nav_item_upgrades',
      hidden: true,
      caching: false
    });
  });
})(Tygh, Tygh.$);