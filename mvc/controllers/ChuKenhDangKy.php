<?php
class ChuKenhDangKy extends Controller{
    function SayHi(){
        // 1. get data khách hàng đăng nhập
        if(isset($_POST["btn-dang-ky-ngay"])){
            $emailDangKy = $_POST["email-dang-ky"];
            $tenDangKy = $_POST["ten-dang-ky"];
            $passDangKy = $_POST["pass-dang-ky"];
            $passNhapLai = $_POST["password-nhap-lai"];
        }
        
        $this->view("cat-template", ["Page"=>"chu-kenh-dang-ky"]);
        
    }
    
}
?>
