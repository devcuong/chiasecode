<?php

class API extends Controller
{

    public $ThanhVienModel;
    public $CodeModel;

    public function __construct()
    {
        $this->ThanhVienModel = $this->model("ThanhVienModel");
        $this->CodeModel = $this->model("CodeModel");
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

    public function ThanhVienDangNhap()
    {
        $kq = "";
        if(isset($_POST["log-email"]) && isset($_POST["log-password"])){
            $logEmail = $_POST["log-email"];
            $logPassword = $_POST["log-password"];
            $kq = $this->ThanhVienModel->LayThanhVienByEmail($logEmail, $logPassword);
        }
        if(isset($_SESSION["userid"])){
            $tatCaCode = mysqli_num_rows($this->CodeModel->GetAllCodeByUserId($_SESSION["userid"]));
            $codeDangHienThi = mysqli_num_rows($this->CodeModel->GetAllCodeDangHienThiByUserId($_SESSION["userid"]));
            $codeDangAn = mysqli_num_rows($this->CodeModel->GetAllCodeDangAnByUserId($_SESSION["userid"]));
            $codeChoDuyet = mysqli_num_rows($this->CodeModel->GetAllCodeDangChoDuyetByUserId($_SESSION["userid"]));
            $codeChoDuyetPhi = mysqli_num_rows($this->CodeModel->GetAllCodeDangChoDuyetPhiByUserId($_SESSION["userid"]));
            $upDateThongTin = $this->ThanhVienModel->UpdateThongTinUpload($_SESSION["userid"],$tatCaCode, $codeDangHienThi, $codeDangAn, $codeChoDuyet, $codeChoDuyetPhi);
        }
        echo $kq;
    }
    
   public function ThanhVienLogout(){
       $kq = $this->ThanhVienModel->XoaSessionDangNhap();
       echo $kq;
   }
   
   /* CHECK TITLE */
   public function CheckCodeTitle(){
       $title = $_POST["title"];
       $kq = $this->CodeModel->CodeTitleDuplicate($title);
       echo $kq;
   }
   
   
}
?>