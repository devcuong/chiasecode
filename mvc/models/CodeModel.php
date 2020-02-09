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
        
        /*THÊM CODE BY THÀNH VIÊN*/
        public function InsertCode($imageDaiDien, $tieuDeCode, $danhMuc, $moTaNgan, $linkCode, $linkDemo, $luaChonPhiTai, $phiTai, $camKetHoTro, $hinhAnhCode, $moTaChiTiet, $huongDanCaiDat, $tuKhoa, $daDocDieuKhoan, $thanhVienUpload, $ngayUpdate){
            $qr = "INSERT INTO code VALUES(null, '$tieuDeCode', 0, 0, '$luaChonPhiTai', $phiTai, '$imageDaiDien', '$danhMuc', 0, '$moTaNgan', '$linkCode', '$linkDemo',$camKetHoTro,'$hinhAnhCode', '$moTaChiTiet', '$huongDanCaiDat','$tuKhoa',$daDocDieuKhoan, $thanhVienUpload,0,0,'','','$ngayUpdate')";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            
            return json_encode($result);
        }
        
        /*LẤY CODE BỞI ID CODE*/
        public function GetCodeById($Id){
            $qr = "SELECT * FROM code WHERE id = $Id";
            return mysqli_query($this->con, $qr);
        }
        
        /*UPDATE YÊU THÍCH*/
        public function UpdateYeuThich($Id){
            $qr = "UPDATE code SET yeuthich = yeuthich + 1 WHERE id = $Id";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*LẤY TẤT CẢ CODE UPLOAD BỞI THÀNH VIÊN*/
        public function GetAllCodeByUserId($userId){
            $qr = "SELECT * FROM code WHERE thanhvienupload = $userId";
            return mysqli_query($this->con, $qr);
        }
        
        /*LẤY TẤT CẢ CODE ĐANG HIỂN THỊ BỞI THÀNH VIÊN*/
        public function GetAllCodeDangHienThiByUserId($userId){
            $qr = "SELECT * FROM code WHERE thanhvienupload = $userId AND hienthi = 1";
            return mysqli_query($this->con, $qr);
        }
        
        /*LẤY TẤT CẢ CODE ĐANG ẨN BỞI THÀNH VIÊN*/
        public function GetAllCodeDangAnByUserId($userId){
            $qr = "SELECT * FROM code WHERE thanhvienupload = $userId AND hienthi = 0";
            return mysqli_query($this->con, $qr);
        }
        
        /*LẤY TẤT CẢ CODE ĐANG CHỜ DUYỆT*/
        public function GetAllCodeDangChoDuyetByUserId($userId){
            $qr = "SELECT * FROM code WHERE thanhvienupload = $userId AND duocduyet = 0";
            return mysqli_query($this->con, $qr);
        }
        
        /*UPDATE HIỂN THỊ CODE*/
        public function UpdateHienThiCode($Id){
            $qr = "UPDATE code SET hienthi = 1 WHERE id = $Id";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*UPDATE ẨN CODE*/
        public function UpdateAnCode($Id){
            $qr = "UPDATE code SET hienthi = 0 WHERE id = $Id";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
    }
?>