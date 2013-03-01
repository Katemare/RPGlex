<?php
$database->exec_query('UPDATE terms SET terms.page=CONCAT(\'B\', `terms`.`page`) WHERE category_id != 3');
$database->exec_query('UPDATE terms SET terms.page=CONCAT(\'M\', `terms`.`page`) WHERE category_id = 3');
?>