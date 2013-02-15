<div id="content-page">
    <div class="title-container">
        <div class="title-content-inner">
            <div class="title-content">
                <ul>
                    <li>Settings</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="area">
        <div class="area-content">
            <div class="actions">
                    <div class="btn-base auto-width">
                        <a href="/admin/static_pages/add.html" title="New"><span>New</span></a>
                    </div>
                    <div class="btn-base">
                        <a href="javascript:submit_to('ids_form', '/admin/static_pages/edit.html')" title="Edit"><span>Edit</span></a>
                    </div>
                    <div class="btn-base">
                        <a href="javascript:submit_to('ids_form', '/admin/static_pages/delete.html')" title="Delete"><span>Delete</span></a>
                    </div>                            
            </div>
            
            <table cellpadding="0" cellspacing="0" class="listing">
            
                <tr>
                    <th>&nbsp;</th>
                    <th><a href="#" class="sort up" title="Url">Url</a></th>
                    <th><a href="#" class="sort up" title="Title">Title</a></th>
                    <th>Actions</th>
                </tr>
                
                <form action="" method="post" id="filter_form">
                <tr class="filters">
                    <td>&nbsp;</td>
                    <td><input type="text" value=""/></td>
                    <td><input type="text" value=""/></td>

                    <td class="actions">
                        <a href="#" title="Apply" class="apply ico">Apply</a>
                        <a href="#" title="Reset" class="clear ico">Reset</a>
                    </td>
                </tr>
                </form>
                
                <form action="" method="post" id="ids_form">
                {foreach from=$records.records item=record}
                    <tr>
                        {foreach from=$record item=field name="record"}
                            {if $smarty.foreach.record.first}
                                <td><span class="niceCheck"><input type="checkbox" name="ids[]" value="{$field}"/></span></td>
                            {else}
                                <td>{$field}</td>
                            {/if}
                        {/foreach}
                        <td class="actions">
                            <a href="/admin/static_pages/edit.html?id={$record.id}" title="Edit" class="edit ico">Edit</a>
                            <a href="/admin/static_pages/delete.html?id={$record.id}" title="Delete" class="delete ico" onclick="showpp(); return false;">Delete</a>
                        </td>
                    </tr>
                {/foreach}
                </form>
            </table>
            
            {include file='pagination.tpl'}
                                
    </div>
</div>