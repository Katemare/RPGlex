<table>
<caption> <b>Comments </b></caption>
{foreach from=$comments item=comment}
<tr><td>-- {$comment.text}</td></tr>
{/foreach}
<tr><td>
    <input type="text" id='{$term_id}_newtext' />
    <input type="button" value="Add comment" onclick="add_comment({$term_id}, $('#{$term_id}_newtext').val())" />
</td></tr>
</table>
