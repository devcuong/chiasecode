<?php
    class KenhYoutubeModel extends DB{

        public function KenhMoiNhat(){
            $qr = "SELECT tencode, anhdemo, luotxem, luotsub, theloai, phitai FROM kenhyoutube INNER JOIN danhmuc ON kenhyoutube.danhmuc = danhmuc.id  ORDER BY kenhyoutube.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*WEBSITE NỔI BẬT */
        public function WebsiteMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luotsub, theloai, phitai FROM code INNER JOIN danhmuc ON code.danhmuc = danhmuc.id WHERE code.loaiungdung='1' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*ỨNG DỤNG NỔI BẬT*/
        public function UngDungMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luotsub, theloai, phitai FROM code INNER JOIN danhmuc ON code.danhmuc = danhmuc.id WHERE code.loaiungdung='2' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

         /*GAME NỔI BẬT*/
         public function GameMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luotsub, theloai, phitai FROM code INNER JOIN danhmuc ON code.danhmuc = danhmuc.id WHERE code.loaiungdung='3' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }
        
        /*CODE THEO LOẠI CODE*/
        /*DÙNG TRONG MODEL LOẠI CODE*/
    }
?>