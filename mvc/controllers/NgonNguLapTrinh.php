<?php
class NgonNguLapTrinh extends Controller{
    function Index($tenController, $tenParam){
            $arr = explode("-",$tenParam);
            //Model
            $loaiCode = $this->model("LoaiCodeModel");
            $dsCode = $loaiCode->CodeTheoLoaiCode($arr[1]);
            $tenLoaiCode = $loaiCode->LayTenLoaiCode($arr[1]);
            //View
            $this->view("cat-template", ["Page"=>"ngon-ngu-lap-trinh","CodeTheoNgonNgu"=>$dsCode, "TenLoaiCode"=>$tenLoaiCode]);
            
    }
}
?>
