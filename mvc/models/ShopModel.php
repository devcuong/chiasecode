<?php
    class ShopModel extends DB{

        public function ShopMoiNhat(){
            $qr = "SELECT tencode, anhdemo, luotxem, luottai, theloai, phitai FROM shop INNER JOIN danhmuc ON shop.danhmuc = danhmuc.id  ORDER BY shop.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*WEBSITE NỔI BẬT */
        public function WebsiteMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai, phitai FROM code INNER JOIN danhmuc ON code.danhmuc = danhmuc.id WHERE code.loaiungdung='1' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*ỨNG DỤNG NỔI BẬT*/
        public function UngDungMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai, phitai FROM code INNER JOIN danhmuc ON code.danhmuc = danhmuc.id WHERE code.loaiungdung='2' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

         /*GAME NỔI BẬT*/
         public function GameMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai, phitai FROM code INNER JOIN danhmuc ON code.danhmuc = danhmuc.id WHERE code.loaiungdung='3' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }
        
        /*CODE THEO LOẠI CODE*/
        /*DÙNG TRONG MODEL LOẠI CODE*/
    }
?>