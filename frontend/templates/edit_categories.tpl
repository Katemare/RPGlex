<div>
    {foreach from=$cats item=category key=category_id}
    <div class="category_edit_block">
        <form class="inline_form" action="/edit_category" method="post">
            <input type="text" name="name" value="{$category.name}" />
            <input type="hidden" name="id" value="{$category_id}" />
            <input type="submit" name="edit_category_submit" value="Edit category" />
        </form> 
        {if isset($category.fields) }
            {foreach from=$category.fields item=field}
                <div class="category_field">
                    {$field.name} 
                    <input type="button" value="edit" onclick="$('#c_{$category_id}_f_{$field.id}').css('display', 'block');" />
                    <input type="button" value="delete" onclick="window.location='/delete_field?id={$field.id}'" />
                    <form id="c_{$category_id}_f_{$field.id}" action="/edit_category_field" method="post"  style="display:none">
                        <input type="text" name="field_name" value="{$field.name}" />
                        <input type="hidden" name="field_id" value="{$field.id}" />
                        <input type="submit" name="edit_field_submit" value="Save" />
                    </form>
                </div>
            {/foreach}
        {/if}
        <form action="/add_field" method="post" >
            <label> Field name: <input type="text" name="name" /> </label> 
            <input type="hidden" name="category_id" value="{$category_id}" />
            <input type="submit" name="add_field_submit" value="Add field" />
        </form>
    </div>        
    {/foreach }
    <form action="add_category" method="post">
        <input type="text" name="text" />
        <input type="submit" name="add_category_submit" value="Add category" />
    </form>
</div>