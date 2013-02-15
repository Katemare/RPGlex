<div id="content-page">
    <div class="title-container">
        <div class="title-content-inner">
            <div class="title-content">
                <ul>
                    <li><a href="/admin/static_pages/show.html" title="Users">Static Pages</a></li>
                    <li>Editing static page</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="area">
        <div class="area-content">                   
            <div class="actions">
                <div class="btn-base">
                    <a href="javascript:submit_to('data_form', '/admin/static_pages/save.html')" title="Save"><span>Save</span></a>
                </div>
                <div class="btn-base">
                    <a href="/admin/static_pages/show.html" title="Back"><span>Back</span></a>
                </div>
            </div>
            <form action="" method="post" id="data_form">
                <table cellpadding="0" cellspacing="0" class="manage">
                    {if !empty($record.id)}
                        <input type="hidden" name="id" value="{$record.id}" />
                    {/if}
                    <tr>
                        <td><label>Url: <span>*</span></label></td>
                        <td><input type="text" name="url" value="{$record.url}" /></td>
                    </tr>
                    <tr>
                        <td><label>Title: <span>*</span></label></td>
                        <td><input type="text" name="title" value="{$record.title}" /></td>
                    </tr>
                    <tr>
                        <td><label>Content:</label></td>
                        <td><textarea class="h500" cols="" rows="" name="content">{$record.content}</textarea></td>
                    </tr>
                    
                    
                </table>
            </form>
            <div class="actions bottom">
                <div class="btn-base">
                    <a href="javascript:submit_to('data_form', '/admin/static_pages/save.html')" title="Save"><span>Save</span></a>
                </div>
                <div class="btn-base">
                    <a href="/admin/static_pages/show.html" title="Back"><span>Back</span></a>
                </div>
            </div>
        </div>                
    </div>
</div>