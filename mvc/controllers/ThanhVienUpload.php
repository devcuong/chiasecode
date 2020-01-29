<?php
class ThanhVienUpload extends Controller{
    function SayHi(){
        if(isset($_SESSION["username"])){
            $this->view("cat-template", ["Page"=>"thanh-vien-upload"]);
        }else{
            header("Location: http://localhost/chiasecode", 301);
            exit();
        }
       
        
    }
    
}
?>
