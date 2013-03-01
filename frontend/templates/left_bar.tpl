<div id="category_links">
    <ul>
        <ul class="category_link">         
            <a href="/?category=-1">All on one page</a>        
        </ul>
        {foreach from=$categories item=category}    
            <ul class="category_link"> 
            {if isset($current_category) && $category.id == $current_category} <b> {/if}
                <a href="/?category={$category.id}">{$category.name}</a>
            {if isset($current_category) && $category.id ==$current_category} </b> {/if}
            </ul>
        {/foreach}
        {if $users->isLogged()}
        <ul class="edit_category_link"><i><a href="/edit_categories">Edit categories</a></i></ul>
        {/if}
    </ul>
</div>