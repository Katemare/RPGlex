<table>
<caption> <b>Translate variants </b></caption>
{foreach from=$variants item=variant}
<tr>
    <td>{$variant.value}</td>
    <td> <input type="button" value="Delete" onclick="ajax('/delete_variant?id={$variant.id}');renew_variants({$term_id}, 'term_{$term_id}_variants_container');" /> </td>
    <td> <input type="button" value="Make default" onclick="ajax('/make_default_translate?id={$term_id}&text={$variant.value}');window.location.reload()"/> </td> 
</tr>
{/foreach}
{if $users->isLogged()}
<tr><td colspan="3">
    <input type="text" id='{$term_id}_newvariant' />
    <input type="button" value="Add variant" onclick="add_variant({$term_id}, $('#{$term_id}_newvariant').val())" />
</td></tr>
{/if}
</table>