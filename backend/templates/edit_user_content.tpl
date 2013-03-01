<div id="content-page">
    <div class="title-container">
        <div class="title-content-inner">
            <div class="title-content">
                <ul>
                    <li><a href="/admin/users/show.html" title="Users">Users</a></li>
                    <li>New user</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="area">
        <div class="area-content">                   
            <div class="actions">
                <div class="btn-base">
                    <a href="javascript:submit_to('data_form', '/admin/users/save.html')" title="Save"><span>Save</span></a>
                </div>
                <div class="btn-base">
                    <a href="/admin/users/show.html" title="Back"><span>Back</span></a>
                </div>
            </div>
            <form action="" method="post" id="data_form">
                <table cellpadding="0" cellspacing="0" class="manage">
                    {if !empty($record.id)}
                        <input type="hidden" name="id" value="{$record.id}" />
                    {/if}
                    <tr>
                        <td><label>Username: <span>*</span></label></td>
                        <td><input type="text" name="username" value="{$record.username}" /></td>
                    </tr>
                    <tr>
                        <td><label>Password: <span>*</span></label></td>
                        <td><input type="password" name="password" value="" /></td>
                    </tr>
                    <tr>
                        <td><label>Password: <span>*</span></label></td>
                        <td><input type="password" name="password_confirm" value="" /></td>
                    </tr>
                    <tr>
                        <td><label>Role: <span>*</span></label></td>
                        <td>
                            <select name="role">
                                <option value="backend/">admin user</option>
                                <option value="frontend/" selected="">frontend user</option>
                            </select>
                        </td>
                    </tr>                   
                    
                </table>
            </form>
            <div class="actions bottom">
                <div class="btn-base">
                    <a href="javascript:submit_to('data_form', '/admin/users/save.html')" title="Save"><span>Save</span></a>
                </div>
                <div class="btn-base">
                    <a href="/admin/settings/show.html" title="Back"><span>Back</span></a>
                </div>
            </div>
        </div>                
    </div>
</div>