<?php
class CodeUploadCuaToi extends Controller{
    
    public $CodeModel;
    public $ThanhVienModel;
    public $tatCaCode;
    public $codeHienThi;
    public $codeDangAn;
    public $codeChoDuyet;
    public $codeChoDuyetPhi;
    
    public function __construct()
    {
        $this->CodeModel = $this->model("CodeModel");
        $this->ThanhVienModel = $this->model("ThanhVienModel");
        
    }
    Function ThongKeCode(){
        $tt = $this->ThanhVienModel->LayThanhVienById($_SESSION["userid"]);
        while ($row = mysqli_fetch_assoc($tt))
        {
            $this->tatCaCode = $row['tatcacodeupload'];
            $this->codeHienThi = $row['codehienthi'];
            $this->codeDangAn = $row['codedangan'];
            $this->codeChoDuyet = $row['codechoduyet'];
            $this->codeChoDuyetPhi = $row['codechoduyetphi'];
        }
    }
    /*LẤY CODE UPLOAD CUA TOI*/
    function Index(){
        if(isset($_SESSION["userid"])){
            $kq = $this->CodeModel->GetAllCodeByUserId($_SESSION["userid"]);
            
            $this->ThongKeCode();
            
            //View
            $this->view("cat-template", ["Page"=>"code-upload-cua-toi",
                "AllCodeByUser" => $kq,
                "TatCaCode" => $this->tatCaCode,
                "CodeHienThi" =>$this->codeHienThi,
                "CodeDangAn" => $this->codeDangAn,
                "CodeChoDuyet" =>$this->codeChoDuyet,
                "CodeChoDuyetPhi" =>$this->codeChoDuyetPhi
            ]);
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
            if($kq){
               $this->ThongKeCode();
               $kq = $this->ThanhVienModel->UpdateCodeHienThi($_SESSION["userid"], $this->codeHienThi+1);
               $kq = $this->ThanhVienModel->UpdateCodeDangAn($_SESSION["userid"], $this->codeDangAn-1);
            }
        }
        echo $kq;
        
    }
    
    /*ẨN CODE*/
    function AnCode(){
        $kq = false;
        if (isset($_SESSION["userid"])){
            $idCode = $_POST["id"];
            $kq = $this->CodeModel->UpdateAnCode($idCode);
            if($kq){
                $this->ThongKeCode();
                $kq = $this->ThanhVienModel->UpdateCodeDangAn($_SESSION["userid"], $this->codeDangAn+1);
                $kq = $this->ThanhVienModel->UpdateCodeHienThi($_SESSION["userid"], $this->codeHienThi-1);
            }
        }
        echo $kq;
        
    }
    
    /*LẤY CODE ĐANG HIỂN THỊ*/
    function CodeDangHienThi(){
        if(isset($_SESSION["userid"])){
            $kq = $this->CodeModel->GetAllCodeDangHienThiByUserId($_SESSION["userid"]);
            $this->ThongKeCode();
            
            //View
            $this->view("cat-template", ["Page"=>"code-upload-cua-toi",
                "AllCodeByUser" => $kq,
                "TatCaCode" => $this->tatCaCode,
                "CodeHienThi" =>$this->codeHienThi,
                "CodeDangAn" => $this->codeDangAn,
                "CodeChoDuyet" =>$this->codeChoDuyet,
                "CodeChoDuyetPhi" =>$this->codeChoDuyetPhi
            ]);
        }else{
            header("Location: http://localhost/chiasecode", 301);
            exit();
        }
    }
    
    /*LẤY CODE ĐANG ẨN*/
    function CodeDangAn(){
        if(isset($_SESSION["userid"])){
            $kq = $this->CodeModel->GetAllCodeDangAnByUserId($_SESSION["userid"]);
            $this->ThongKeCode();
            
            //View
            $this->view("cat-template", ["Page"=>"code-upload-cua-toi",
                "AllCodeByUser" => $kq,
                "TatCaCode" => $this->tatCaCode,
                "CodeHienThi" =>$this->codeHienThi,
                "CodeDangAn" => $this->codeDangAn,
                "CodeChoDuyet" =>$this->codeChoDuyet,
                "CodeChoDuyetPhi" =>$this->codeChoDuyetPhi
            ]);
        }else{
            header("Location: http://localhost/chiasecode", 301);
            exit();
        }
    }
    
    /*CODE ĐANG CHỜ DUYỆT*/
    function CodeChoDuyet(){
        if(isset($_SESSION["userid"])){
            $kq = $this->CodeModel->GetAllCodeDangChoDuyetByUserId($_SESSION["userid"]);
            $this->ThongKeCode();
            
            //View
            $this->view("cat-template", ["Page"=>"code-upload-cua-toi",
                "AllCodeByUser" => $kq,
                "TatCaCode" => $this->tatCaCode,
                "CodeHienThi" =>$this->codeHienThi,
                "CodeDangAn" => $this->codeDangAn,
                "CodeChoDuyet" =>$this->codeChoDuyet,
                "CodeChoDuyetPhi" =>$this->codeChoDuyetPhi
            ]);
        }
        else{
            header("Location: http://localhost/chiasecode", 301);
            exit();
        }
    }
    
    /*CODE ĐANG CHỜ DUYỆT PHÍ*/
    function CodeChoDuyetPhi(){
        if(isset($_SESSION["userid"])){
            $kq = $this->CodeModel->GetAllCodeDangChoDuyetPhiByUserId($_SESSION["userid"]);
            $this->ThongKeCode();
            
            //View
            $this->view("cat-template", ["Page"=>"code-upload-cua-toi",
                "AllCodeByUser" => $kq,
                "TatCaCode" => $this->tatCaCode,
                "CodeHienThi" =>$this->codeHienThi,
                "CodeDangAn" => $this->codeDangAn,
                "CodeChoDuyet" =>$this->codeChoDuyet,
                "CodeChoDuyetPhi" =>$this->codeChoDuyetPhi
            ]);
        }
        else{
            header("Location: http://localhost/chiasecode", 301);
            exit();
        }
    }
    
    
}
    ?>
