<?php

    namespace  controllers;
    use base\Controller; 
    
    class ControllerMain extends Controller{ 
        public function actionIndex(){
           
        }
        
        public function actionLogin(){
            $this->_view->setTitle('login');
            $this->_view->render('login', []);
        }
        
        public function actionLogout(){
            
        }
        
        public function actionRegister(){
            
        }
    
    }