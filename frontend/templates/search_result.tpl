<div>
    <div>Search result:</div>
    {foreach from=$search_result item=result}
        <div>
            <span> <b>Term:</b> {$result.english} </span>
            <span> <b>Translation:</b> {$result.russian} </span>
            <span> <b>Category:</b> {$result.category} </span>
        </div>
    {/foreach}
</div>