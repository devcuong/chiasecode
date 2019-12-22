<?php
    class Home extends Controller{
        function SayHi(){
            $code = $this->model("CodeModel");
            //echo $teo->GetSV();

            //View
            $this->view("main-template", ["Page"=>"main-home",
            "CodeMoiNhat" => $code->CodeMoiNhat(),
            "WebsiteMoiNhat" => $code->WebsiteMoiNhat(),
            "UngDungMoiNhat" => $code->UngDungMoiNhat(),
            "GameMoiNhat" => $code->GameMoiNhat() ]);
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