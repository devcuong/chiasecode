<?php

class DangKy extends Controller
{

    public $ThanhVienModel;

    public function __construct()
    {
        // Model
        $this->ThanhVienModel= $this->model("ThanhVienModel");
    }

    function Index()
    {
        $this->view("cat-template", [
            "Page" => "dang-ky"
        ]);
    }

    function DangKyThanhCong($ho, $ten)
    {
        $this->view("cat-template", [
            "Page" => "dang-ky-thanh-cong"
        ]);
    }
    
    public function ThanhVienDangKy()
    {
        if (isset($_POST["email-dang-ky"]) && $_POST["ho-ten-dang-ky"] && $_POST["ten-hien-thi"] && $_POST["sdt-dang-ky"] && $_POST["password-dang-ky"]) {
            $emailDangKy = $_POST["email-dang-ky"];
            $hoTenDangKy = $_POST["ho-ten-dang-ky"];
            $tenHienThi = $_POST["ten-hien-thi"];
            $sdtDangKy = $_POST["sdt-dang-ky"];
            $passDangKy = password_hash($_POST["password-dang-ky"], PASSWORD_DEFAULT);
            // 1. Insert database thành viên
            $kq = $this->ThanhVienModel->InsertThanhVien($passDangKy, $emailDangKy, $hoTenDangKy, $tenHienThi, $sdtDangKy);
            
            
            echo $kq;
        }
    }
}
?>
