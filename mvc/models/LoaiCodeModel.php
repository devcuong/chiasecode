<?php
    class LoaiCodeModel extends DB{
        /*CODE THEO LOẠI CODE*/
        public function CodeTheoLoaiCode($loaiCode){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai, phitai FROM code INNER JOIN loaicode ON code.loaicode = loaicode.id WHERE code.loaicode=".$loaiCode." ORDER BY code.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*LẤY TÊN LOẠI CODE NGÔN NGỮ LẬP TRÌNH*/
        public function  LayTenLoaiCode($loaiCode){
            $qr = "SELECT * FROM loaicode WHERE id = ".$loaiCode;
            return  mysqli_query($this->con, $qr);
        }
        
    }
?>