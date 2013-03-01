<div>
{if $users->isLogged()}
    Welcome, {$users->username()} <a href="/profile">Change password</a> <a href="/logout"> logout </a> 
{else}
    <form action="/login" method="post">
        <label> Username: <input type="text" name="username" /> </label>
        <label> Password: <input type="password" name="password" /> </label>
        <input type="submit" name="login_submit" value="Login" />
    </form>
{/if}
</div>