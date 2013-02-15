<div id="category_links">
    {foreach from=$categories item=category}
        <span class="category_link"> 
        {if isset($current_category) && $category.id == $current_category} <b> {/if}
            <a href="/?category={$category.id}">{$category.name}</a>
        {if isset($current_category) && $category.id ==$current_category} </b> {/if}
        </span>
    {/foreach}
    <form action="add_category" method="post">
        <input type="text" name="text" />
        <input type="submit" name="add_category_submit" value="Add category" />
    </form>
</div>