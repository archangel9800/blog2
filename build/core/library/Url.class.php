<?php

    namespace  library;

    class Url{ 

//        Убираем пустые сегменты и ненужные символы из Url
        protected static function getSegmentsFromUrl(){
           $segments = explode('/', $_GET['url']);
           if(empty($segments[count($segments)-1])){
               unset($segments[count($segments)-1]);
           } 
         $segments = array_map(function($v){
             return preg_replace('/[\'\\\*]/','',$v);
         }, $segments );  
          return $segments;    
        }
        
//       Выбираем параметры переданые GET
        public static function getParam($paramName){
          return addslashes($_GET[$paramName]);  
        }
        
//        Возвращает номер сегмента
        public static function getSegment($n){
          $segments = self::getSegmentsFromUrl(); 
          return $segments[$n];  
        }
        
//        Возвращает все сегменты
         public static function getAllSegments(){
          return self::getSegmentsFromUrl();   
        }
        

    }

