        <div id="header">        
            <div class="header-container">
                <ul>
                {foreach from=$menu_data key=menuname item=menuitem name=menuloop}
                    {if $menuitem.type='static'}
                        <li><a href="{$menuitem.url}" title="{$menuname}">
                                {if $smarty.foreach.menuloop.first}<span>{/if}
                                {$menuname}
                                {if $smarty.foreach.menuloop.first}</span>{/if}
                            </a>
                        </li>
                    {else}
                    {/if}
                {/foreach}
                </ul>
                <!--<ul>-->
                   <!-- <li><a href="#" title="Users" class="selected"><span>Users</span></a></li>--> <!-- tag span needed only for the first list item --> 
<!--                    <li><a href="#" title="Static pages">Static pages</a></li>
                    <li><a href="#" title="Catalog">Catalog</a>
                        <ul class="submenu">
                            <li><a href="#" title="Donec in viverra">Donec in viverra</a></li>
                            <li><a href="#" title="Vestibulum nunc eros">Vestibulum nunc eros</a></li>
                            <li><a href="#" title="Vivamus quis libero">Vivamus quis libero</a></li>
                            <li><a href="#" title="Cum sociis natoque">Cum sociis natoque</a></li>
                            <li><a href="#" title="Morbi in sapien">Morbi in sapien</a></li>
                            <li><a href="#" title="Class aptent taciti sociosqu">Class aptent taciti sociosqu</a></li>
                            <li class="last"><a href="#" title="Quisque a est leo">Quisque a est leo</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Orders">Orders</a></li>
                    <li><a href="#" title="Email marketing">Email marketing</a></li>
                    <li><a href="#" title="Settings ">Settings </a></li>
                    <li><a href="#" title="Users">Users</a></li>
                    <li><a href="#" title="Static pages">Static pages</a></li>
                    <li><a href="#" title="Email marketing">Email marketing</a>
                        <ul class="submenu">
                            <li><a href="#" title="Donec in viverra">Donec in viverra</a></li>
                            <li><a href="#" title="Vestibulum nunc eros">Vestibulum nunc eros</a></li>
                            <li><a href="#" title="Vivamus quis libero">Vivamus quis libero</a></li>
                            <li><a href="#" title="Cum sociis natoque">Cum sociis natoque</a></li>
                            <li><a href="#" title="Morbi in sapien">Morbi in sapien</a></li>
                            <li><a href="#" title="Class aptent taciti sociosqu">Class aptent taciti sociosqu</a></li>
                            <li class="last"><a href="#" title="Quisque a est leo">Quisque a est leo</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Settings ">Settings </a></li>
                </ul>-->
                <ul class="logout">
                    <li><a href="/admin/logout.html">Logout</a></li>
                </ul>
            </div>
        </div>