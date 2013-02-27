<?php

    if (isset($_REQUEST['search_submit'])) {
        $query = escape($_REQUEST['query']);
        $sql = 'SELECT russian, english, term_categories.name as category '.
               'FROM terms, term_categories '.
               'WHERE terms.category_id=term_categories.id AND (russian LIKE \'%'.$query.'%\' OR english LIKE \'%'.$query.'%\') ';        
        $result = $database->exec_query($sql);
        $TemplateEngine->assign('search_result', $result);
        $TemplateEngine->setTemplate('content', 'search_result.tpl');        
    }    

?>