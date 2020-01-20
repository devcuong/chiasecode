<?php
class ChuKenhDangKy extends Controller{
    function SayHi(){
        // 1. get data khách hàng đăng nhập
        if(isset($_POST["btn-tao-shop"])){
            $mainShopName = $_POST["main-shop-name"];
            echo $mainShopName;
        }
        
        $this->view("cat-template", ["Page"=>"chu-kenh-dang-ky"]);
        
    }
    
}
?>
