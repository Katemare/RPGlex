<div class="pagination">
                <div class="select-items">
                    <form method="post" action="">
                        <label>Visible row count:</label>
                        <select onchange="this.form.submit();" name="ipp">
                            <option value="2">2</option>
                            <option value="10">10</option>
                            <option selected="selected" value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="500">500</option>
                            <option value="all">Show All</option>
                        </select>
                    </form>
                </div>
                <ul>
                    {if $records.pagination.current_page == 0}
                        <li><span class="disabled">First</span></li>
                        <li><span class="disabled">Prev</span></li>
                    {else}
                        <li><a href="?page=0">First</a></li>
                        <li><a href="?page={$records.pagination.current_page - 1}">Prev</a></li>
                    {/if}
                    {section name=page start=0 loop=$records.pagination.page_count step=1}
                        {if $smarty.section.page.index==$records.pagination.current_page}
                            <li><span>{$smarty.section.page.index + 1}</span></li>
                        {else}
                            <li><a href="?page={$smarty.section.page.index}">{$smarty.section.page.index + 1}</a></li>
                        {/if}
                    {/section}
<!--                    <li><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>-->
                    {if $records.pagination.current_page == $records.pagination.page_count - 1}
                        <li><span class="disabled">Next</span></li>
                        <li><span class="disabled">Last</span></li>
                    {else}
                        <li><a href="?page={$records.pagination.page_count + 1}">Next</a></li>
                        <li><a href="?page={$records.pagination.page_count - 1}">Last</a></li>
                    {/if}
                </ul>
                <p>Page: {$records.pagination.current_page + 1} of {$records.pagination.page_count} Total: {$records.pagination.item_count} records</p>
            </div>