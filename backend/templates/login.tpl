<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administration panel</title>
        <link href="/backend/templates/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link media="screen" type="text/css" rel="stylesheet" href="/backend/templates/css/main-style.css" />
        <link media="screen" type="text/css" rel="stylesheet" href="/backend/templates/css/custom-style.css" />
</head>
<script type="text/javascript">

function submit() {
    document.getElementById("f").submit();
}

</script>

<body>
        <div id="main">
                <div id="content-login">
                        <div class="title-container">
                                <div class="title-content-inner">
                                        <div class="title-content">
                                                <ul>
                                                        <li>Login</li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                        
                        <div class="area">
                                <div class="lform">
                        
                                        <div class="messages">
                        {if isset($error)}
                            <div class="message error">
                                <span class="ico error">&nbsp;</span>
                                <div class="messages-text">
                                    <p>{$error}</p>
                                </div>
                                <a href="#" title="Close" class="close">Close</a>
                            </div>
                        {/if}
                    </div>
                                        <form method="post" id="f">
                                                <label>Login:</label>
                                                <input type="text" name="login" value="" />
                                                <label>Password:</label>
                                                <input type="password" name="password" value=""/>
                                                <input type="hidden" name="Submit" value="submit"/>
                                                <div class="btn-base">
                                                        <a href="javascript:submit();" ><span>Login</span></a>
                                                </div>
                                        </form>
                                </div>
                                
                        </div>
                </div>
        <div class="area-bottom lbottom">
            <div class="area-bottom-inner">
                <div class="area-bottom-main">
                </div>
            </div>
        </div>
        </div>
</body>
</html>
