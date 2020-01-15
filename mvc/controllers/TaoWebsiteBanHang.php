<?php
class TaoWebsiteBanHang extends Controller{
    function SayHi(){
        //$arr = explode("-",$tenParam);
        //Model
       /* $loaiCode = $this->model("LoaiCodeModel");
        $dsCode = $loaiCode->CodeTheoLoaiCode($arr[1]);
        $tenLoaiCode = $loaiCode->LayTenLoaiCode($arr[1]);*/
        //View
        // 1. get data khách hàng đăng nhập
        if(isset($_POST["btn-tao-shop"])){
            $mainShopName = $_POST["main-shop-name"];
            echo $mainShopName;
        }
        
        $this->view("cat-template", ["Page"=>"tao-website-ban-hang"]);
        
    }
    
}
?>
