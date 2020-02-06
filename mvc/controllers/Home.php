<?php
    class Home extends Controller{
        function Index(){
            $shop = $this->model("CodeModel");
            //echo $teo->GetSV();

            //View
            $this->view("main-template", ["Page"=>"main-home",
            "CodeMoiNhat" => $shop->CodeMoiNhat()]);
        }
        function Show($a, $b){
            //Model
            $teo = $this->model("SinhVienModel");
            $tong = $teo->Tong($a,$b);

            //View
            $this->view("main-template", ["Page"=>"news","Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()]);
        }
    }
?>