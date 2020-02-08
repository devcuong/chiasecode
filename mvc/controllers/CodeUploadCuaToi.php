<?php
class CodeUploadCuaToi extends Controller{
    
    public $CodeModel;
    
    public function __construct()
    {
        $this->CodeModel = $this->model("CodeModel");
    }
    
    /*LẤY CODE UPLOAD CUA TOI*/
    function Index(){
        if(isset($_SESSION["userid"])){
            $kq = $this->CodeModel->GetAllCodeByUserId($_SESSION["userid"]);
            //View
            $this->view("cat-template", ["Page"=>"code-upload-cua-toi",
                "AllCodeByUser" => $kq]);
        }else{
            header("Location: http://localhost/chiasecode", 301);
            exit();
        }
    }
    
    /*HIỂN THỊ CODE*/
    function HienThiCode(){
        $kq = false;
        if (isset($_SESSION["userid"])){
            $idCode = $_POST["id"];
            $kq = $this->CodeModel->UpdateHienThiCode($idCode);
        }
        echo $kq;
        
    }
    
    /*ẨN CODE*/
    function AnCode(){
        $kq = false;
        if (isset($_SESSION["userid"])){
            $idCode = $_POST["id"];
            $kq = $this->CodeModel->UpdateAnCode($idCode);
        }
        echo $kq;
        
    }
    
}
    ?>
