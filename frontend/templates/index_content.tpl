<div>
<div class="display_category_block">
{foreach from=$terms item=category key=category_id}
    <table border="1">
        <caption>{$category.category_name}</caption>
        <tr>
            <th> Enlgish </th>
            <th> Russian </th>
            <th> Page </th>
            {if !empty($category.fields)}
                {foreach from=$category.fields item=field}
                    <th> {$field.name} </th>
                {/foreach}
            {/if}
        </tr>
        {foreach from=$category.terms key=term_id item=term}
        <tr>
            <td> {$term.english} &nbsp;</td>
            <td> {$term.russian} &nbsp;</td>
            <td> {$term.page} &nbsp;</td>
            {if isset($category.fields)}
                {foreach from=$category.fields item=field}
                    <td>
                    {if isset($term.fields[$field.id])}
                        {$term.fields[$field.id]}
                    {/if}
                    &nbsp;
                    </td>
                {/foreach}
            {/if}
            <td><input type="button" value="Edit" onclick="show_hide('term_{$term_id}_edit_container');" /></td>
            <td><input type="button" value="Comments" onclick="show_hide_comments({$term_id}, 'term_{$term_id}_comments_container');" /> </td>
            <td><input type="button" value="Variants" onclick="show_hide_variants({$term_id}, 'term_{$term_id}_variants_container');"/> </td>
            <td><input type="button" value="Delete" onclick="ajax('/delete_term?id={$term_id}');window.location.reload()"/> </td>
        </tr>
        <tr>
            {if isset($category.fields)} {assign var=span value=count($category.fields)} {else} {assign var=span value=0} {/if}
            <td colspan="{7 + $span}" > 
                <div id="term_{$term_id}_comments_container" style="display:none"></div>
                <div id="term_{$term_id}_variants_container" style="display:none"></div>
                <div id="term_{$term_id}_edit_container" style="display:none">
                    <form action="/edit_term" method="post">
                        <table>
                            <tr><td align="right" ><label> Eglish: </label></td> <td><input type="text" name="english" value="{$term.english}"/></td> </tr>
                            <tr><td align="right" ><Label> Russian: </label></td> <td><input type="text" name="russian" value="{$term.russian}"/></td> </tr>
                            <tr><td align="right" ><Label> Page: </label></td> <td><input type="text" name="page" value="{$term.page}"/> </td> </tr>
                            {if !empty($category.fields)}
                                {foreach from=$category.fields item=field}
                                    {if isset($term.fields[$field.id])} {assign var=value value=$term.fields[$field.id]} {else} {assign var=value value=''} {/if}
                                    <tr><td align="right" ><label> {$field.name}: </label></td> <td><input type="text" name="fields[{$field.id}]" value="{$value}"/></td> </tr>
                                {/foreach}
                            {/if}
                            <input type="hidden" name="current_category" value="{$category_id}" />
                            <input type="hidden" name="term_id" value="{$term_id}" />
                            <tr><td><input type="submit" name="edit_term_submit" value="Edit term" /> </td></tr>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
        {/foreach}
    </table>
        <input type="button" value="Add new term" onclick="$('#add_category_form_{$category_id}').css('display', 'block');$(this).css('display', 'none');" />
        <form id="add_category_form_{$category_id}" action="/add_term" method="post" style="display:none" >
            <table>
                <tr><td align="right" ><label> Eglish: </label></td> <td><input type="text" name="english"/></td> </tr>
                <tr><td align="right" ><Label> Russian: </label></td> <td><input type="text" name="russian"/></td> </tr>
                <tr><td align="right" ><Label> Page: </label></td> <td><input type="text" name="page"/> </td> </tr>
                {if !empty($category.fields)}
                    {foreach from=$category.fields item=field}
                        <tr><td align="right" ><label> {$field.name}: </label></td> <td><input type="text" name="fields[{$field.id}]" /></td> </tr>
                    {/foreach}
                {/if}
                <input type="hidden" name="current_category" value="{$category_id}" />
                <tr><td><input type="submit" name="add_term_submit" value="Add new term" /> </td></tr>
            </table>
        </form>
{/foreach}
</div>




<!--<table border="1">
    <tr><th>English</th><th>Russian</th><th>Page</th></tr>
    {foreach from=$terms item=term}
        <tr>
            <td>{$term.english}</td>
            <td>{$term.russian}</td>
            <td>{$term.page}</td>
            <td> <input type="button" value="Edit term" onclick="$('#edit_term_{$term.id}').css('display', 'table-row');" />
            <td> <input type="button" value="Show comments" onclick="get_comments( {$term.id}, 'comments_container_{$term.id}')" />
            <td> <input type="button" value="Hide comments" onclick="$('#comments_container_{$term.id}').html('');" />
        </tr>
        <tr style="display:none" id="edit_term_{$term.id}">
            <td colspan=6>
                <form action="/edit_term" method="post">
                    <label> English: <input type="text" name="english" value="{$term.english}"/> </label>
                    <Label> Russian: <input type="text" name="russian" value="{$term.russian}"/> </label>
                    <Label> Page: <input type="text" name="page" value="{$term.page}"/> </label>
                    <input type="hidden" name="current_category" value="{$current_category}" />                
                    <input type="hidden" name="term_id" value="{$term.id}" />      
                    <input type="submit" value="Save" name="edit_term_submit" />
                </form>
            </td>
        </tr>
        <tr>
            <td colspan=5><div id="comments_container_{$term.id}" /></td>
        </tr>
    {/foreach}
</table>-->


</div>