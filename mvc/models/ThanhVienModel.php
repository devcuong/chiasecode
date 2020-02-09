<?php
    class ThanhVienModel extends DB{
        /*THÊM USER*/
        public function InsertThanhVien($email, $password, $hoten, $username, $sdt){
            $qr = "INSERT INTO thanhvien VALUES(null, '$email', '$password', '$hoten', '$username', '$sdt',0,0,0,0,0)";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return json_encode( $result );
        }
        
        /*UPDATE THÔNG TIN USER*/
        public function UpdateThongTinUpload($userId, $tatCaCode, $codeHienThi, $codeDangAn, $codeChoDuyet, $codeChoDuyetPhi){
            $qr = "UPDATE thanhvien SET tatcacodeupload = $tatCaCode, codehienthi = $codeHienThi, codedangan = $codeDangAn, codechoduyet = $codeChoDuyet, codechoduyetphi = $codeChoDuyetPhi WHERE id = $userId";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*LẤY USER BẰNG EMAIL VÀ PASSWORD*/
        public function LayThanhVienByEmail($email, $password){
            $qr = "SELECT id, password, username FROM thanhvien WHERE email='$email'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            $stringReturn = "";
            while($r = mysqli_fetch_array($rows)){
                if (password_verify($password, $r["password"])) {
                     $stringReturn = $r["password"];
                     $_SESSION['username'] = $r["username"];
                     $_SESSION['userid'] = $r["id"];
                     $kq=true;
                }
            }
            return json_encode($kq);
        }
        
        /*LẤY THÀNH VIÊN BẰNG USERID*/
        public function LayThanhVienById($iD){
            $qr = "SELECT * FROM thanhvien WHERE id = $iD";
            return mysqli_query($this->con, $qr);
        }
        
        /* XÓA SESSION USER ĐĂNG NHẬP */
        public function XoaSessionDangNhap()
        {
            unset($_SESSION['username']);
            unset($_SESSION['userid']);
            return true;
        
        }
        
        /*CHECK USERNAME CHỦ KÊNH*/
        public function CheckUsernameThanhVien($username){
            $qr = "SELECT id FROM thanhvien WHERE username='$username'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
        /*CHECK EMAIL CHỦ KÊNH*/
        public function CheckEmailThanhVien($email){
            $qr = "SELECT id FROM thanhvien WHERE email='$email'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
        /*CHECK SDT CHỦ KÊNH*/
        public function CheckSdtThanhVien($sdt){
            $qr = "SELECT id FROM thanhvien WHERE sdt='$sdt'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
    }
?>