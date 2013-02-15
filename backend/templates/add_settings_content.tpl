<div id="content-page">
    <div class="title-container">
        <div class="title-content-inner">
            <div class="title-content">
                <ul>
                    <li><a href="/admin/settings/show.html" title="Users">Settings</a></li>
                    <li>New setting</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="area">
        <div class="area-content">                   
            <div class="actions">
                <div class="btn-base">
                    <a href="javascript:submit_to('data_form', '/admin/settings/save.html')" title="Save"><span>Save</span></a>
                </div>
                <div class="btn-base">
                    <a href="/admin/settings/show.html" title="Back"><span>Back</span></a>
                </div>
            </div>
            <form action="" method="post" id="data_form">
                <table cellpadding="0" cellspacing="0" class="manage">
                    {if !empty($record.id)}
                        <input type="hidden" name="id" value="{$record.id}" />
                    {/if}
                    <tr>
                        <td><label>Name: <span>*</span></label></td>
                        <td><input type="text" name="name" value="{$record.name}" /></td>
                    </tr>
                    <tr>
                        <td><label>value: <span>*</span></label></td>
                        <td><input type="text" name="value" value="{$record.value}" /></td>
                    </tr>
                    
                    
                </table>
            </form>
            <div class="actions bottom">
                <div class="btn-base">
                    <a href="javascript:submit_to('data_form', '/admin/settings/save.html')" title="Save"><span>Save</span></a>
                </div>
                <div class="btn-base">
                    <a href="/admin/settings/show.html" title="Back"><span>Back</span></a>
                </div>
            </div>
        </div>                
    </div>
</div>