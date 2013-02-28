<div id="category_links">
    <ul>
        <li class="category_link">         
            <a href="/">All on one page</a>        
        </li>
        {foreach from=$categories item=category}    
            <li class="category_link"> 
            {if isset($current_category) && $category.id == $current_category} <b> {/if}
                <a href="/?category={$category.id}">{$category.name}</a>
            {if isset($current_category) && $category.id ==$current_category} </b> {/if}
            </li>
        {/foreach}
        <li class="edit_category_link"><i><a href="/edit_categories">Edit categories</a></i></li>
    </ul>
</div>