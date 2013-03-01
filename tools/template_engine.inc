<?php

    class TemplateEngine {
        
        private $_smarty;
        private $_entrance_point;
        private $_unqiue_template;
        
        /**
         */
        public function __construct ($entrance_point) {
            $this->_entrance_point = $entrance_point;
            $this->_smarty = new SmartyBC;
            
            $this->setTemplate('head', 'head.tpl');
            $this->setTemplate('header', 'header.tpl');
            $this->setTemplate('left_bar', 'left_bar.tpl');
            $this->setTemplate('content', 'index_content.tpl');
            $this->settemplate('right_bar', 'right_bar.tpl');
            $this->setTemplate('footer', 'footer.tpl');
            
        }
        
        /**
         */
        public function smarty() {
            return $this->_smarty;
        }
        
        public function assign($what, $value)
        {
            $this->_smarty->assign($what, $value);
        }
        
        /**
         */
        public function setTemplate($what, $name) {
            $this->_smarty->assign($what, $name);
        }
        
        /**
         */
        public  function show() {
            if (isset($this->_unqiue_template) && !empty($this->_unqiue_template)) {
                $this->_smarty->display($this->_unqiue_template);
            } else {
                $this->_smarty->display('main.tpl');
            }
        }
        
        public function setUniqueTemplate($name)
        {
            $this->_unqiue_template = $name;
        }
    }

?>