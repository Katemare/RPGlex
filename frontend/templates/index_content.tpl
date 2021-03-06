<div class="content">
<div id="sort_by_block">
{if isset($current_category)} {$category_link = "category=$current_category&"} {else} {$category_link = ''} {/if}
Sort by: 
<a href="/?{$category_link}sort=english">English names</a>
<a href="/?{$category_link}sort=russian">Russian names</a>
<a href="/?{$category_link}sort=page">Page field</a>
</div>
<div class="display_category_block">
{foreach from=$terms item=category key=category_id}
    <table>
        <caption>{$category.category_name}</caption>
        {if isset($category.fields)} {assign var=span value=count($category.fields)} {else} {assign var=span value=0} {/if}
        {if $users->isLogged()} {$span = $span + 2} {/if}
        <tr><td colspan="{5 + $span}" class="description_field">
            {$category.category_description|replace:"\n":'<br/>'}
        </td></tr>
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
        {if !empty($category.terms)}
        {foreach from=$category.terms key=term_id item=term name=term_foreach}
        {if $smarty.foreach.term_foreach.index % 2} {$row_class = "row-odd"} {else} {$row_class = "row-even"} {/if}
        <tr class="{$row_class}">
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
            {if $users->isLogged()}
            <td><img src="/frontend/templates/images/edit.png" alt="Edit" onclick="show_hide('term_{$term_id}_edit_container');" /></td>
            {/if}
            <td><img src="/frontend/templates/images/comments.png" alt="Comments" onclick="show_hide_comments({$term_id}, 'term_{$term_id}_comments_container');" /> </td>
            <td><img src="/frontend/templates/images/variants.png" alt="Variants" onclick="show_hide_variants({$term_id}, 'term_{$term_id}_variants_container');"/> </td>
            {if $users->isLogged()}
            <td><img src="/frontend/templates/images/delete.png" alt="Delete" onclick="ajax('/delete_term?id={$term_id}');window.location.reload()"/> </td>
            {/if}
            
        </tr>
        <tr class="term_form">            
            <td colspan="{5 + $span}" class="term_form"> 
                <div id="term_{$term_id}_comments_container" style="display:none"></div>
                <div id="term_{$term_id}_variants_container" style="display:none"></div>
                {if $users->isLogged()}
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
                {/if}
            </td>
        </tr>
        {/foreach}
        {/if}
    </table>
        {if $users->isLogged()}
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
        {/if}
{/foreach}
</div>
</div>