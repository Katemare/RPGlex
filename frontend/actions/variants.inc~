<?php
    $sql = 'SELECT id, value FROM translate_variants WHERE term_id='.$_REQUEST['term_id'];
    $variants = $database->exec_query($sql);
    $TemplateEngine->assign('variants', $variants);
    $TemplateEngine->assign('term_id', $_REQUEST['term_id']);
    $TemplateEngine->setUniqueTemplate('variants.tpl');
?>