<?php

//extract and define settings
$settings = $database->select_from_table(array('name', 'value'), 'settings', array());
foreach ($settings as $setting) {
    define(strtoupper($setting['name']), $setting['value']);
}

//check path - maybe it's static page come from backend?
$record = $database->select_from_table(array('title', 'content'), 'static_pages', array('url' => $path));
if(!empty($record)) {
    $record = $record[0];
    $TemplateEngine->assign('page', $record);
    $TemplateEngine->setTemplate('content', 'static_page_content.tpl');
    $path = '/';
}

//retrieve existing categories from database and set into template engine
$categories = $database->select_from_table(array('id', 'name'), 'term_categories', array());
$TemplateEngine->assign('categories', $categories);
if(isset($_REQUEST['category'])) {
$TemplateEngine->assign('current_category', $_REQUEST['category']);
}

if (isset($_REQUEST['category'])) {
    $terms = $database->select_from_table(array('id', 'english', 'russian'), 'terms', array('category_id' => $_REQUEST['category']));
    $TemplateEngine->assign('terms', $terms);
    $TemplateEngine->assign('current_category', $_REQUEST['category']);
}

?>