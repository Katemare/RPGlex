<?php

class Mysql {
    
    private $connection;
    private $settings;
    
    public function __construct($settings) 
    {
        $this->settings = $settings;
        $this->connection = mysql_connect($settings['database']['host'],
                                          $settings['database']['user'],
                                          $settings['database']['password']);
        if (!$this->connection) die ('cant connect to mysql server');
        mysql_set_charset('utf8', $this->connection);
        mysql_select_db($settings['database']['database'], $this->connection);
    }
    
    public function exec_query($sql) 
    {        
        $mysql_res = mysql_query($sql, $this->connection);
        if (!$mysql_res) {
            echo '<pre> '.mysql_error($this->connection)."\n".$sql.'<pre>';
        }
        $result = array();
        while($row = @mysql_fetch_assoc($mysql_res)) {
            $result[] = $row;
        }
        return $result;
    }
    
    public function insert_into_table($table, $fields, $values)
    {
        $sql = 'INSERT INTO '.$table.' ';
        $fields_part = join(',', $this->make_escaped_fieds($fields));
        $values_part = join(",", $this->make_escaped_values($values));
        $sql .= '('.$fields_part.') VALUES ('.$values_part.')';
        return $this->exec_query($sql);
    }
        
    public function select_from_table($fields, $table, $filter, $sort = '')
    {
        return $this->exec_query($this->prepare_select_query($fields, $table, $filter, $sort));
    }
    
    public function get_records_with_pagination($fields, $table, $filter, $sort_clause = '', $page = 0)
    {
        $select = $this->prepare_select_query($fields, $table, $filter);
        if (!empty($sort_clause)) {
            $select .= ' SORT BY '.$sort_clause;
        }
        $item_count = $this->exec_query('SELECT COUNT(*) FROM `'.$table.'` WHERE '.join(' AND ',$this->make_escaped_filter($filter)));
        $item_count = $item_count[0]['COUNT(*)'];
        $pagination['item_count'] = $item_count;
        $pagination['page_count'] = ceil($item_count / $this->settings['pagination']['items']);
        $pagination['current_page'] = $page;
        $limit_from = $this->settings['pagination']['items'] * $page;
        $select .= ' LIMIT '.$limit_from.','.$this->settings['pagination']['items'];
        $data = $this->exec_query($select);
        return array('records' => $data, 'pagination' => $pagination);
    }
    
    public function save_record_into_table($values, $table, $id = '')
    {
        if (empty($id)) { //new record      
            $this->insert_into_table($table, array_keys($values), array_values($values));
        } else { //existing record
            $sql = 'UPDATE '.$table.' SET ';
            $set_parts = array();
            foreach ($values  as $name => $value) {
                $set_parts[] = '`'.mysql_real_escape_string($name, $this->connection).'`=\''.
                            mysql_real_escape_string($value, $this->connection).'\'';                             
            }
            $sql .= join(',', $set_parts).' WHERE id=\''.mysql_real_escape_string($id, $this->connection).'\'';
            return $this->exec_query($sql);
        }
    }    
    
    public function last_insert_id()
    {
        return mysql_insert_id($this->connection);
    }
    
    private function make_escaped_fieds($fields) 
    {
        $escaped_fields = array();
        foreach($fields as $field) {
            $escaped_fields[] = '`'.mysql_real_escape_string($field, $this->connection).'`';
        }
        return $escaped_fields;
    }
    
    private function make_escaped_values($values)
    {
        $escaped_values = array();
        foreach($values as $field) {
            $escaped_values[] = '\''.mysql_real_escape_string($field, $this->connection).'\'';
        }
        return $escaped_values;
    }
    
    private function make_escaped_filter($filter)
    {        
        $escaped_filter = array('1=1');
        foreach($filter as $name => $value) {
            $escaped_filter[] = '`'.mysql_real_escape_string($name, $this->connection)
            .'`=\''.mysql_real_escape_string($value, $this->connection).'\'';
        }
        return $escaped_filter;
    }
    
    private function prepare_select_query($fields, $table, $filter, $sort)
    {        
        $escaped_fields = $this->make_escaped_fieds($fields);
        $escaped_filter = $this->make_escaped_filter($filter);
        $sql = 'SELECT '.join(',', $escaped_fields).' FROM `'.$table.'` WHERE '.join(' AND ', $escaped_filter);
        if (!empty($sort)) {
            $sql .= ' ORDER BY '.mysql_real_escape_string($sort, $this->connection);
        }
        return $sql;
    }

}

?>