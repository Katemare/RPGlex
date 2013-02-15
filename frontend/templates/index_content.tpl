<div>
<table border="1">
    <tr><th>English</th><th>Russian</th></tr>
    {foreach from=$terms item=term}
        <tr>
            <td>{$term.english}</td>
            <td>{$term.russian}</td>
            <td> <input type="button" value="Edit term" onclick="$('#edit_term_{$term.id}').css('display', 'table-row');" />
            <td> <input type="button" value="Show comments" onclick="get_comments( {$term.id}, 'comments_container_{$term.id}')" />
            <td> <input type="button" value="Hide comments" onclick="$('#comments_container_{$term.id}').html('');" />
        </tr>
        <tr style="display:none" id="edit_term_{$term.id}">
            <td colspan=5>
                <form action="/edit_term" method="post">
                    <label> Eglish: <input type="text" name="english" value="{$term.english}"/> </label>
                    <Label> Russian: <input type="text" name="russian" value="{$term.russian}"/> </label>
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
</table>

<form action="add_term" method="post">
    <label> Eglish: <input type="text" name="english"/> </label>
    <Label> Russian: <input type="text" name="russian"/> </label>
    <input type="hidden" name="current_category" value="{$current_category}" />
    <input type="submit" name="add_term_submit" value="Add new term" /> 
</form>
</div>