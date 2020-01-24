<?php

class API extends Controller
{

    public $ChuKenhModel;

    public function __construct()
    {
        $this->ChuKenhModel = $this->model("ChuKenhModel");
    }

    public function CheckUsername()
    {
        $un = $_POST["un"];
        echo $this->ChuKenhModel->CheckUsernameChuKenh($un);
    }

    public function CheckEmail()
    {
        $email = $_POST["email"];
        echo $this->ChuKenhModel->CheckEmailChuKenh($email);
    }

    public function CheckSdt()
    {
        $sdt = $_POST["sdt"];
        echo $this->ChuKenhModel->CheckSdtChuKenh($sdt);
    }

    public function ChuKenhDangKy()
    {
        if (isset($_POST["email-dang-ky"]) && $_POST["ho-ten-dang-ky"] && $_POST["ten-hien-thi"] && $_POST["sdt-dang-ky"] && $_POST["password-dang-ky"]) {
            $emailDangKy = $_POST["email-dang-ky"];
            $hoTenDangKy = $_POST["ho-ten-dang-ky"];
            $tenHienThi = $_POST["ten-hien-thi"];
            $sdtDangKy = $_POST["sdt-dang-ky"];
            $passDangKy = password_hash($_POST["password-dang-ky"], PASSWORD_DEFAULT);
            // 2. Insert database bang chu kenh
            $kq = $this->ChuKenhModel->InsertChuKenhYoutube($passDangKy, $emailDangKy, $hoTenDangKy, $tenHienThi, $sdtDangKy);
            echo $kq;
        }
    }
}
?>