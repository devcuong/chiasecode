<?php

class API extends Controller
{

    public $ThanhVienModel;

    public function __construct()
    {
        $this->ThanhVienModel = $this->model("ThanhVienModel");
    }

    public function CheckUsername()
    {
        $un = $_POST["un"];
        echo $this->ThanhVienModel->CheckUsernameThanhVien($un);
    }

    public function CheckEmail()
    {
        $email = $_POST["email"];
        echo $this->ThanhVienModel->CheckEmailThanhVien($email);
    }

    public function CheckSdt()
    {
        $sdt = $_POST["sdt"];
        echo $this->ThanhVienModel->CheckSdtThanhVien($sdt);
    }

    public function ThanhVienDangKy()
    {
        if (isset($_POST["email-dang-ky"]) && $_POST["ho-ten-dang-ky"] && $_POST["ten-hien-thi"] && $_POST["sdt-dang-ky"] && $_POST["password-dang-ky"]) {
            $emailDangKy = $_POST["email-dang-ky"];
            $hoTenDangKy = $_POST["ho-ten-dang-ky"];
            $tenHienThi = $_POST["ten-hien-thi"];
            $sdtDangKy = $_POST["sdt-dang-ky"];
            $passDangKy = password_hash($_POST["password-dang-ky"], PASSWORD_DEFAULT);
            // 2. Insert database bang chu kenh
            $kq = $this->ThanhVienModel->InsertThanhVien($passDangKy, $emailDangKy, $hoTenDangKy, $tenHienThi, $sdtDangKy);
            echo $kq;
        }
    }
    
    public function ThanhVienDangNhap()
    {
        if(isset($_POST["log-email"]) && isset($_POST["log-password"])){
            $logEmail = $_POST["log-email"];
            $logPassword = $_POST["log-password"];
            $kq = $this->ThanhVienModel->LayThanhVienByEmail($logEmail, $logPassword);
            echo $kq;
        }
    }
}
?>