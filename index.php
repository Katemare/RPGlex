<?php
header('Content-Type: text/html; charset=utf-8');
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'].'/');
define('SMARTY_DIR', PATH_ROOT.'smarty/');
require_once SMARTY_DIR.'Smarty.class.php';
require_once PATH_ROOT.'tools/template_engine.inc';

$path = $_REQUEST['request_path'];

$entrance_point = 'frontend/';

if (!strncmp($path, 'admin/', 6)) {
    $entrance_point = 'backend/';
    $path = substr($path, 6);
} 

define('ENTRANCE_POINT', $entrance_point);

//extract suffix...
$path = preg_replace('/\.(php|html)$/', '', $path);



$TemplateEngine = new TemplateEngine($entrance_point);
$TemplateEngine->smarty()->setTemplateDir(PATH_ROOT.$entrance_point.'templates');
$TemplateEngine->smarty()->setCompileDir(PATH_ROOT.'templates_compiled');

$settings = parse_ini_file(PATH_ROOT.'conf/main.conf', true);

require_once PATH_ROOT.'tools/mysql.inc';

$database = new Mysql($settings);
session_start();

require_once PATH_ROOT.'tools/users.inc';

$users = new Users($entrance_point, $database);

//load functions
$functions = opendir(PATH_ROOT.'tools/functions');
while ($functions && false !== ($function = readdir($functions))) {
    if (preg_match('/\.inc$/', $function)) {
        require_once PATH_ROOT.'tools/functions/'.$function;
    }
}


require_once PATH_ROOT.$entrance_point.'common.inc';

if (!empty($path) && $path != 'index' && $path != '/') {
    $action_path = PATH_ROOT.$entrance_point.'actions/'.$path.'.inc';    
    if (file_exists($action_path)) {        
        require_once $action_path;        
    } else {
        header("HTTP/1.0 404, Not Found", true, 404);
        exit();        
    }

}
$TemplateEngine->show();

?>