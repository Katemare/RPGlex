<?php
    
    $sql = 'SELECT comments.text FROM comments WHERE term_id='.escape($_REQUEST['term_id']).' ORDER BY stamp';
    $comments = $database->exec_query($sql);
    $TemplateEngine->assign('comments', $comments);
    $TemplateEngine->assign('term_id', $_REQUEST['term_id']);
    $TemplateEngine->setUniqueTemplate('comments.tpl');
    
?>