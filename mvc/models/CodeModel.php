<?php
    class CodeModel extends DB{

        public function CodeMoiNhat(){
            $qr = "SELECT tencode, anhdemo, luotxem, luottai, theloai, phitai FROM code INNER JOIN danhmuc ON code.danhmuc = danhmuc.id  ORDER BY code.id DESC LIMIT 8";
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
        
        /*CHECK CODE TITLE DUPLICATE*/
        public  function CodeTitleDuplicate($title){
            $qr = "SELECT tencode FROM code WHERE tencode='$title'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
        /**/
        /*THÊM CODE BY THÀNH VIÊN*/
        public function InsertCode($imageDaiDien, $tieuDeCode, $danhMuc, $moTaNgan, $linkCode, $linkDemo, $luaChonPhiTai, $phiTai, $camKetHoTro, $hinhAnhCode, $moTaChiTiet, $huongDanCaiDat, $tuKhoa, $daDocDieuKhoan, $thanhVienUpload, $ngayUpdate){
            $qr = "INSERT INTO code VALUES(null, '$tieuDeCode', 0, 0, '$luaChonPhiTai', '$phiTai', '$imageDaiDien', '$danhMuc', 0, '$moTaNgan', '$linkCode', '$linkDemo','$camKetHoTro','$hinhAnhCode', '$moTaChiTiet', '$huongDanCaiDat','$tuKhoa','$daDocDieuKhoan', 0, '$ngayUpdate')";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            
            return json_encode( $result );
        }
        
    }
?>