<?php
    class API extends Controller{
        public $ChuKenhModel;
        
        public function __construct(){
            $this->ChuKenhModel = $this->model("ChuKenhModel");
        }
        
        public function CheckUsername(){
            $un = $_POST["un"];
            echo $this->ChuKenhModel->CheckUsernameChuKenh($un);
        }
        
        public function CheckEmail(){
            $email = $_POST["email"];
            echo $this->ChuKenhModel->CheckEmailChuKenh($email);
        }
    }
?>