<?php
class ChuKenhDangKy extends Controller{
    function SayHi(){
        // 1. get data khách hàng đăng nhập
        if(isset($_POST["btn-dang-ky-ngay"])){
            $mainShopName = $_POST["email-dang-ky"];
            echo $mainShopName;
        }
        
        $this->view("cat-template", ["Page"=>"chu-kenh-dang-ky"]);
        
    }
    
}
?>
