<?php
class TaoWebsiteBanHang extends Controller{
    function SayHi($tenController, $tenParam){
        $arr = explode("-",$tenParam);
        //Model
        $loaiCode = $this->model("LoaiCodeModel");
        $dsCode = $loaiCode->CodeTheoLoaiCode($arr[1]);
        $tenLoaiCode = $loaiCode->LayTenLoaiCode($arr[1]);
        //View
        $this->view("cat-template", ["Page"=>"tao-website-ban-hang"]);
        
    }
    
}
?>
