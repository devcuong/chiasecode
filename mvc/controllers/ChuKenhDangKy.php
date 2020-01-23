<?php
class ChuKenhDangKy extends Controller{
    
    public $ChuKenhModel;
    
    public function __construct(){
        // Model
        $this->ChuKenhModel = $this->model("ChuKenhModel");
    }
    
    function SayHi(){
        
        $kq="";
        // 1. get data khách hàng đăng nhập
        if(isset($_POST["btn-dang-ky-ngay"])){
                $emailDangKy = $_POST["email-dang-ky"];
                $hoTenDangKy = $_POST["ho-ten-dang-ky"];
                $tenHienThi = $_POST["ten-hien-thi"];
                $sdtDangKy = $_POST["sdt-dang-ky"];
                $passDangKy = password_hash($_POST["password-dang-ky"], PASSWORD_DEFAULT);
                // 2. Insert database bang chu kenh
                $kq = $this->ChuKenhModel->InsertChuKenhYoutube($passDangKy, $emailDangKy, $hoTenDangKy, $tenHienThi, $sdtDangKy);
        }   
        $this->view("cat-template", ["Page"=>"chu-kenh-dang-ky",
                              "insertResult" => $kq
        ]);
        
    }
    
}
?>
