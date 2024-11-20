<div class="sidebar">
              <div class="sidebar__item">
                <h4>All Category</h4>
                <ul>
                  {foreach from=$top_level_categories item=category}
                    <li><a href="{$category.category_link}">{$category.category_name}</a></li>
                  {/foreach}
                </ul> 
              </div>       
</div>