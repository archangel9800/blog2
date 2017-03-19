<?php

    namespace  base;

    abstract class View{
        public $basePath = __DIR__.'/../views/templates/';
        protected $tittle;
        protected $seo = [];
        protected $css = [];
        protected $js = [];
        
        protected $_layout;
        
        public function setLayout($layout){
            $this->_layout =  __DIR__.'/../views/layout/'.$layout.'.php';
        }
        
        public function render($tplName, $data){
            include  $this->_layout;
        }
        
        public function setTitle($str){
            $this->tittle = $str;
        }
        
        public function getTitle(){
            return $this->tittle;
        }
        
         public function setCss($css){
            $this->css[] = $css;
        }
        
        public function getJs(){
            return $this->js;
        }
    }