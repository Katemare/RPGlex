<?php

    $cats = $database->select_from_table(array('id', 'name', 'description'), 'term_categories', array());
    $categories = array();
    foreach($cats as $cat) {
        $categories[$cat['id']]['name'] = $cat['name'];
        $categories[$cat['id']]['description'] = $cat['description'];
    }
    $fields = $database->select_from_table(array('id', 'category_id', 'name'), 'category_fields', array());
    foreach($fields as $field) {
        $categories[$field['category_id']]['fields'][] = array('id' => $field['id'], 'name' => $field['name']);
    }

//     $sql = 'SELECT term_categories.id as idcat, term_categories.name as namecat, '
//             .'category_fields.id as idfield, category_fields.name as namefield '
//             .'FROM term_categories, category_fields WHERE term_categories.id = category_fields.category_id';
//     $result = $database->exec_query($sql);
    
//     foreach($result as $row) {
//         $categories[$row['catid']]['name'] = $row['catname'];
//         $categories[$row['catid']]['fields'][] = array('id' =>$row['idfield'],  'name' => $row['namefield']);
//     }
    $TemplateEngine->assign('cats', $categories);
    $TemplateEngine->setTemplate('content', 'edit_categories.tpl');
?>