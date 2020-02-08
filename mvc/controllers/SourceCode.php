<?php
    class SourceCode extends Controller{
        
        public $CodeModel;
        
        public function __construct()
        {
            // Model
            $this->CodeModel = $this->model("CodeModel");
        }
        
        //Biến a ở hàm index lấy tên controller map
        //Biến b ở hà index là param
        function Index($a, $b){
            $arrTenSourceCode = explode("-",$b);
            $maSourceCode = end($arrTenSourceCode);
            $kq = $this->CodeModel->GetCodeById($maSourceCode);
            //View
            $this->view("cat-template", ["Page"=>"source-code",
                "InforSourceCode" => $kq]);
        }
        
        function LikeCode(){
            $idCode = $_POST["id"];
            $kq = $this->CodeModel->UpdateYeuThich($idCode);
            echo $kq;
        }
    }
?>