<?php
    class CodeModel extends DB{

        public function CodeMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai FROM code INNER JOIN loaicode ON code.loaicode = loaicode.id  ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*WEBSITE NỔI BẬT */
        public function WebsiteMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai FROM code INNER JOIN loaicode ON code.loaicode = loaicode.id WHERE code.loaiungdung='1' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*ỨNG DỤNG NỔI BẬT*/
        public function UngDungMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai FROM code INNER JOIN loaicode ON code.loaicode = loaicode.id WHERE code.loaiungdung='2' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

         /*GAME NỔI BẬT*/
         public function GameMoiNhat(){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai FROM code INNER JOIN loaicode ON code.loaicode = loaicode.id WHERE code.loaiungdung='3' ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }
    }
?>