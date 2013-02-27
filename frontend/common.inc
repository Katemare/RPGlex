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

$terms = array();
$sortby = '';
if (empty($_REQUEST['sort'])) {
    $sortby = 'english';
} else {
    $sortby = $_REQUEST['sort'];
}
if (isset($_REQUEST['category'])) {
    $cats = $database->select_from_table(array('id', 'name'), 'term_categories', array('id' => $_REQUEST['category']));
    $cat_id = $cats[0]['id'];
    $terms[$cat_id]['category_name'] = $cats[0]['name'];
    $cats_fields = $database->select_from_table(array('id', 'name'), 'category_fields', array('category_id' => $cats[0]['id']));
    $terms[$cat_id]['fields'] = $cats_fields;
    $termslist = $database->select_from_table(array('id', 'english', 'russian','page'), 'terms', array('category_id' => $cat_id), $sortby);
    foreach($termslist as $row) {
//         $terms[$cat_id]['terms'][$row['term_id']]
        $terms[$cat_id]['terms'][$row['id']]['english'] = $row['english'];
        $terms[$cat_id]['terms'][$row['id']]['russian'] = $row['russian'];
        $terms[$cat_id]['terms'][$row['id']]['page']    = $row['page'];
    }
    $sql = 'SELECT term_fields.id as id, term_fields.term_id as term_id, term_fields.field_id as cat_field_id, value
            FROM term_fields LEFT JOIN terms ON term_fields.term_id = terms.id
            LEFT JOIN term_categories ON terms.category_id = term_categories.id 
            WHERE term_categories.id ='.$_REQUEST['category'];    
    $fieldslist = $database->exec_query($sql);
    foreach($fieldslist as $field) {
        $terms[$cat_id]['terms'][$field['term_id']]['fields'][$field['cat_field_id']] = $field['value'];
    }
} else {
    $categories = $database->select_from_table(array('id', 'name'), 'term_categories', array());
    $all_terms  = $database->select_from_table(array('id', 'category_id', 'english', 'russian', 'page'), 'terms', array(), $sortby);
    $cat_fields = $database->select_from_table(array('id', 'category_id', 'name'), 'category_fields', array());
    $sql = 'SELECT term_fields.field_id as field_id, term_fields.term_id as term_id, '
            .'term_fields.value as value, category_fields.category_id as category_id '
            .'FROM `term_fields` LEFT JOIN `category_fields` ON term_fields.field_id = category_fields.id  WHERE 1=1';
    $term_fields = $database->exec_query($sql);
    foreach($categories as $category) {
        $terms[$category['id']]['category_name'] = $category['name'];
    }
    foreach($cat_fields as $cat_field) {
        $terms[$cat_field['category_id']]['fields'][] = array('id' => $cat_field['id'], 'name' => $cat_field['name']);
    }
    foreach($all_terms as $term) {
        $terms[$term['category_id']]['terms'][$term['id']]['english'] = $term['english'];
        $terms[$term['category_id']]['terms'][$term['id']]['russian'] = $term['russian'];
        $terms[$term['category_id']]['terms'][$term['id']]['page'] = $term['page'];
    }
    foreach($term_fields as $field) {
        $terms[$field['category_id']]['terms'][$field['term_id']]['fields'][$field['field_id']] = $field['value'];
    }
//     var_dump($terms);
}

$TemplateEngine->assign('terms', $terms);
if (isset($_REQUEST['category'])) {
    $TemplateEngine->assign('current_category', $_REQUEST['category']);
}


?>