<?php
    class Home extends Controller{
        function SayHi(){
            $shop = $this->model("ShopModel");
            //echo $teo->GetSV();

            //View
            $this->view("main-template", ["Page"=>"main-home",
            "ShopMoiNhat" => $shop->ShopMoiNhat(),
                "WebsiteMoiNhat" => $shop->WebsiteMoiNhat(),
                "UngDungMoiNhat" => $shop->UngDungMoiNhat(),
                "GameMoiNhat" => $shop->GameMoiNhat() ]);
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