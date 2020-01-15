<?php
    class LoaiCodeModel extends DB{
        /*CODE THEO LOẠI CODE*/
        public function CodeTheoLoaiCode($loaiCode){
            $qr = "SELECT tencode, anhdemo,luotxem, luottai, theloai, phitai FROM kenhyoutube INNER JOIN danhmuc ON kenhyoutube.loaicode = danhmuc.id WHERE kenhyoutube.loaicode=".$loaiCode." ORDER BY kenhyoutube.id DESC LIMIT 8";
            return mysqli_query($this->con, $qr);
        }

        /*LẤY TÊN LOẠI CODE NGÔN NGỮ LẬP TRÌNH*/
        public function  LayTenLoaiCode($loaiCode){
            $qr = "SELECT * FROM danhmuc WHERE id = ".$loaiCode;
            return  mysqli_query($this->con, $qr);
        }
        
    }
?>